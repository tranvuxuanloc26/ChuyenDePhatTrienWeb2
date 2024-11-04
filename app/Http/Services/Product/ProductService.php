<?php

namespace App\Http\Services\Product;

use App\Models\Product;
use App\Models\Menu;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class ProductService
{
    public function getMenu()
    {
        return Menu::where('active', 1)->get();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
>>>>>>> register
=======
>>>>>>> logout
=======
>>>>>>> phan_quyen
=======
>>>>>>> menu_admin_detail
=======
>>>>>>> product_admin_detail
    }
    protected function isValidPrice($request){
        if($request->input('price') != 0 && $request->input('price_sale') != 0 
          && $request->input('price_sale') >= $request->input('price')){
          Session::flash('error', 'Giá giảm phải nhỏ hơn giá gốc');
          return false;
        }

        if($request->input('price_sale') != 0 && (int)$request->input('price') == 0){
            Session::flash('error', 'Vui lòng nhập giá gốc');
            return false;
        };
    }
    public function insert($request){
        $isValidPrice = $this->isValidPrice($request);
        if($isValidPrice === false) return false; 


        try{
        $request->except('_token');
        Product::create($request->all());

        Session::flash('success', 'Thêm sản phẩm thành công');
        }catch(\Exception $err){
        Session::flash('error', 'Thêm sản phẩm lỗi');
        \Log::info($err->getMessage());
        return false;
        }
        return true;
    }

    public function get(){
        return Product::with('menu')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                
                ->orderByDesc('id')
                ->paginate(15);
=======
                ->orderByDesc('id')->paginate(15);
>>>>>>> register
=======
                ->orderByDesc('id')->paginate(15);
>>>>>>> logout
=======
                ->orderByDesc('id')->paginate(15);
>>>>>>> phan_quyen
=======
                ->orderByDesc('id')->paginate(15);
>>>>>>> menu_admin_detail
=======
                ->orderByDesc('id')->paginate(15);
>>>>>>> product_admin_detail
    }

    public function update($request, $product)
    {
        $isValidPrice = $this->isValidPrice($request);
        if($isValidPrice === false) return false; 
        
        try{
            $product->fill($request->input());
            $product->save();
            Session::flash('success', 'Cập nhật thành công');
        }catch(\Exception $err){
            Session::flash( 'error', 'Có lỗi vui lòng thử lại');
            \Log::info($err->getMessage());
            return false;
        }
    return true;
       
    }

    public function delete($request){
        $product = Product::where('id', $request->input('id'))->first();
        if($product){
            $product->delete();
            return true;
        }
        return false;
    }

}