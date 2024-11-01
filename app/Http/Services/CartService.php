<?php


namespace App\Http\Services;
use Session;
use App\Models\Cart;
use App\Jobs\SendMail;
use App\Models\Product;
use App\Models\Customer;
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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> get_product_by_menu
=======
>>>>>>> gui_mail
=======
>>>>>>> load_more
=======
>>>>>>> luu_thong_tin_don_hang
=======
>>>>>>> remove_cart
=======
>>>>>>> sort_by_price
=======
>>>>>>> update_cart
    public function update($request){
        Session::put('carts', $request->input('num_product'));

        return true;

    }

<<<<<<< HEAD
    public function remove($id){
        $carts = Session::get('carts');

        unset($carts[$id]);

        Session::put('carts', $carts);
        return true;

    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> chi_tiet_don_hang_da_luu
=======
>>>>>>> gui_mail
=======
>>>>>>> luu_thong_tin_don_hang
=======
>>>>>>> product_detail
=======
>>>>>>> remove_cart
=======
   
>>>>>>> update_cart

    public function addCart($request){
        try{
            DB::beginTransaction();
            $carts = Session::get('carts');
            if(is_null($carts)) return false ;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
         
=======
=======
>>>>>>> gui_mail
=======
>>>>>>> luu_thong_tin_don_hang
           $customer = Customer::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'content' => $request->input('content')
           ]);
               
           $this->infoProductCart($carts, $customer->id);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> chi_tiet_don_hang_da_luu
=======
>>>>>>> gui_mail
=======
>>>>>>> luu_thong_tin_don_hang
=======
         
>>>>>>> product_detail

           DB::commit();

           Session::flash('success', 'Đặt Hàng Thành Công');


<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
         
=======
           #Queue
           SendMail::dispatch($request->input('email'))->delay(now()->addSeconds(3));
>>>>>>> chi_tiet_don_hang_da_luu
=======
           #Queue
           SendMail::dispatch($request->input('email'))->delay(now()->addSeconds(3));
>>>>>>> gui_mail
=======
           #Queue
           SendMail::dispatch($request->input('email'))->delay(now()->addSeconds(3));
>>>>>>> luu_thong_tin_don_hang
=======
         
>>>>>>> product_detail

=======
        
=======
         
>>>>>>> update_cart
               

           DB::commit();

<<<<<<< HEAD


         
>>>>>>> remove_cart

           Session::forget('carts');
           
        }catch(\Exception $err){
            DB::rollback();
<<<<<<< HEAD
            Session::flash('error', 'Đặt Hàng Lỗi . Vui lòng thử lại sau');
=======
>>>>>>> remove_cart
=======
          
           
        }catch(\Exception $err){
            DB::rollback();
          
>>>>>>> update_cart
            return false;
        }
        return true;
    }
    
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> gui_mail
=======
>>>>>>> luu_thong_tin_don_hang
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

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> chi_tiet_don_hang_da_luu
    public function getCustomer(){
        return Customer::orderByDesc('id')->paginate(8);
    }
=======


   
>>>>>>> get_product_by_menu
=======
    public function getCustomer(){
        return Customer::orderByDesc('id')->paginate(8);
    }
>>>>>>> product_detail

    public function getProductForCart($customer)
    {
        return  $customer->carts()->with(['product' => function ($query){
            $query->select('id','thumb', 'name');
     }])->get();
    }
<<<<<<< HEAD
=======
  
>>>>>>> gui_mail
=======

    
>>>>>>> load_more
=======
=======
    

>>>>>>> remove_cart
    public function getCustomer(){
        return Customer::orderByDesc('id')->paginate(8);
    }

<<<<<<< HEAD
   
>>>>>>> luu_thong_tin_don_hang
=======
>>>>>>> product_detail
=======

>>>>>>> remove_cart
=======

   
>>>>>>> sort_by_price
=======
    

    public function getCustomer(){
        return Customer::orderByDesc('id')->paginate(8);
    }

  
>>>>>>> update_cart


}