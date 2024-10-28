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

    public function update($request){
        Session::put('carts', $request->input('num_product'));

        return true;

    }

   

    public function addCart($request){
        try{
            DB::beginTransaction();
            $carts = Session::get('carts');
            if(is_null($carts)) return false ;

         
               

           DB::commit();

          
           
        }catch(\Exception $err){
            DB::rollback();
          
            return false;
        }
        return true;
    }
    
    

    public function getCustomer(){
        return Customer::orderByDesc('id')->paginate(8);
    }

  


}