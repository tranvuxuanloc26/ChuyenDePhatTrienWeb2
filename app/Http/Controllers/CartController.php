<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CartService;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService){
         $this->cartService = $cartService;
    }

    public function index(Request $request){
           $result = $this->cartService->create($request);
           if($result == false ){
               return redirect()->back();
           }

           return redirect( '/carts');
    }

    public function show(){
        $products = $this->cartService->getProduct();
        return view('carts.list', [
             'title' => 'Giỏ Hàng',
             'products' => $products,
             'carts' => Session::get('carts')
        ]);
    }

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
    public function update(Request $request){
        $this->cartService->update($request);
        return redirect( '/carts');
 
    }

<<<<<<< HEAD
    public function remove($id = 0){
        $this->cartService->remove($id);
        return redirect( '/carts');
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
>>>>>>> remove_cart
=======
  
>>>>>>> update_cart

    public function addCart(Request $request){
         $this->cartService->addCart($request);
         return redirect()->back();
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
}
