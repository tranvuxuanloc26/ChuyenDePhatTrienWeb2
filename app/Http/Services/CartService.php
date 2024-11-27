<?php


namespace App\Http\Services;
use Session;
use App\Models\Cart;
use App\Jobs\SendMail;
use App\Models\Product;
use App\Models\Customer;
use App\Models\UserVoucher;
use App\Models\Voucher;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class CartService
{
    public function create($request){
        $qty = (int)$request->input('num_product');
        $product_id = (int)$request->input('product_id');

        if($qty <= 0 || $product_id <= 0){
               Session::flash('error', 'Số lượng sản phẩm không chính xác');
               return false;
        }

        $carts = Session::get('carts');
        // dd($carts);
        if(is_null($carts)){
           Session::put('carts', [
                $product_id => $qty
            ]);
        return true;
        }

        $exists = Arr::exists($carts, $product_id);
        if($exists){
            $carts[$product_id]  =  $carts[$product_id] + $qty ;
            Session::put('carts', $carts);
            return true;
          }
          $carts[$product_id] = $qty;
          Session::put('carts', $carts);

        return true;

    }

    public function getProduct(){
        $carts = Session::get('carts');
        if(is_null($carts)) return [] ;

        $productId = array_keys($carts);
        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
        ->where('active', 1)
        ->whereIn('id', $productId)
        ->get();
    }

    public function update($request)
    {

        Session::put('carts', $request->input('num_product'));

        $couponCode = $request->input('coupon');

        $cartTotal = $this->calculateCartTotal();
        $discount = $this->applyCoupon($couponCode, $cartTotal);

        Session::put('discount', $discount);

        return redirect()->back()->with('success', 'Giỏ hàng đã được cập nhật!');
    }

    private function calculateCartTotal()
    {

        $cartTotal = 0;
        $carts = Session::get('carts', []);
        foreach ($carts as $productId => $quantity) {
            $product = Product::find($productId);
            if ($product) {
                $price = $product->price_sale != 0 ? $product->price_sale : $product->price;
                $cartTotal += $price * $quantity;
            }
        }
        return $cartTotal;
    }

    private function applyCoupon($couponCode, $cartTotal)
    {
        if (!$couponCode) {
            Session::flash('error', 'Vui lòng nhập mã giảm giá!');
            return 0;
        }


        $voucher = Voucher::where('code', $couponCode)->first();
        if ($voucher->expired_at < Carbon::now()) {
            UserVoucher::where('voucher_id', $voucher->id)
                       ->where('status', 'unused')
                       ->update(['status' => 'expired']);

            Session::flash('error', 'Mã giảm giá đã hết hạn!');
            return 0;
        }
        if (!$voucher) {
            Session::flash('error', 'Mã giảm giá không hợp lệ!');
            return 0;
        }


        if ($voucher->expired_at < now()) {
            Session::flash('error', 'Mã giảm giá đã hết hạn!');
            return 0;
        }
        $userVoucher = UserVoucher::where('user_id', auth()->id())
                        ->where('voucher_id', $voucher->id)
                        ->whereIn('status', ['unused', 'used'])
                        ->first();
        if ($userVoucher) {
            if ($userVoucher->status === 'used') {
                Session::flash('error', 'Bạn đã sử dụng mã giảm giá này rồi!');
                return 0;
            }
        }
        if (!$voucher->active) {
            Session::flash('error', 'Mã giảm giá không khả dụng!');
            return 0;
        }


        if ($voucher->min_order_value && $cartTotal < $voucher->min_order_value) {
            Session::flash('error', 'Giá trị đơn hàng không đủ để áp dụng mã giảm giá!');
            return 0;
        }


        $discount = 0;
        if ($voucher->discount_type === 'percent') {
            $discount = ($cartTotal * $voucher->discount_value) / 100;
            if ($voucher->max_discount && $discount > $voucher->max_discount) {
                $discount = $voucher->max_discount;
            }
        } else if ($voucher->discount_type === 'amount') {
            $discount = $voucher->discount_value;
            if ($discount > $cartTotal) {
                $discount = $cartTotal;
            }
        }

        UserVoucher::updateOrCreate(
            ['user_id' => auth()->id(), 'voucher_id' => $voucher->id],
            ['status' => 'used', 'updated_at' => now()]
        );
        // Lưu thông báo thành công
        Session::flash('success', 'Mã giảm giá đã được áp dụng thành công!');

        return $discount;
    }

    public function remove($id){
        $carts = Session::get('carts');

        unset($carts[$id]);

        Session::put('carts', $carts);

        Session::forget('discount');

        return true;

    }

    public function addCart($request){

        try{
            DB::beginTransaction();
            $carts = Session::get('carts');
            if(is_null($carts)) return false ;

           $customer = Customer::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'content' => $request->input('content'),
            'user_id' => auth()->id() ? auth()->id() : null,
           ]);

           $this->infoProductCart($carts, $customer->id);

           DB::commit();

           Session::flash('success', 'Đặt Hàng Thành Công');


           #Queue
           SendMail::dispatch($request->input('email'))->delay(now()->addSeconds(3));


           Session::forget('carts');
           Session::forget('discount');

        }catch(\Exception $err){
            DB::rollback();
            Session::flash('error', 'Đặt Hàng Lỗi . Vui lòng thử lại sau');
            \Log::debug($err->getMessage());
            return false;
        }
        return true;
    }

    protected function infoProductCart($carts, $customer_id){
       
        $productId = array_keys($carts);
        $products = Product::select('id', 'name', 'price', 'price_sale', 'thumb')
        ->where('active', 1)
        ->whereIn('id', $productId)
        ->get();

        $data = [];
        foreach($products as $product){
            $data[] = [
                'customer_id' => $customer_id,
                'product_id' => $product->id,
                'pty' => $carts[$product->id],
                'price' => $product->price_sale != 0 ? $product->price_sale : $product->price

           ];

         return Cart::insert($data);
        }
    }

    public function getCustomer(){
        return Customer::orderByDesc('id')->paginate(8);
    }

    public function getProductForCart($customer)
    {
        return  $customer->carts()->with(['product' => function ($query){
            $query->select('id','thumb', 'name');
     }])->get();
    }


    #WishLish

    public function createWish($request){
        $qty = (int)$request->input('num_product');
        $product_id = (int)$request->input('product_id');

        if($qty <= 0 || $product_id <= 0){
               Session::flash('error', 'Số lượng sản phẩm không chính xác');
               return false;
        }

        $wishlishs = Session::get('wishlishs');
        // dd($carts);
        if(is_null($wishlishs)){
           Session::put('wishlishs', [
                $product_id => $qty
            ]);
        return true;
        }

        $exists = Arr::exists($wishlishs, $product_id);
        if($exists){
            $wishlishs[$product_id]  =  $wishlishs[$product_id] + $qty ;
            Session::put('wishlishs', $wishlishs);
            return true;
          }
          $wishlishs[$product_id] = $qty;
          Session::put('wishlishs', $wishlishs);

        return true;

    }

    public function getProductWish(){
        $wishlishs = Session::get('wishlishs');
        if(is_null($wishlishs)) return [] ;

        $productId = array_keys($wishlishs);
        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
        ->where('active', 1)
        ->whereIn('id', $productId)
        ->get();
    }



}
