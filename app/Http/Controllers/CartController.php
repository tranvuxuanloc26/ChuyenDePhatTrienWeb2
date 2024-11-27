<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Services\CartService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;

class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService){
         $this->cartService = $cartService;
    }

    public function purchaseHistory(){
        $auth = auth()->user();
        $purchaseHistory = Customer::where('user_id', $auth->id)->get();
        foreach ($purchaseHistory as $history) {
            foreach ($history->carts as $cart) {
                $history->total += $cart->product->price_sale;
            }
        }
        return view('purchase_history.index', [
             'title' => 'Lịch Sử Mua Hàng',
             'purchaseHistory' => $purchaseHistory,
        ]);
    }

    public function showPurchaseHistory($id)
    {
        $userId = Auth::id();
        $customer = Customer::where('user_id', $userId)->first();
        if ($customer) {

            $customer->carts = Cart::where('customer_id', $customer->id)->get();
            $customer->total = $customer->calculateTotalPrice();
            
        } else {
            $customer = null;
        }
        
        return view('purchase_history.detail', [
            'title' => 'Chi Tiết đơn hàng',
            'customer' => $customer,
        ]);
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

    public function update(Request $request){
        $this->cartService->update($request);
        return redirect( '/carts');
 
    }

    public function remove($id = 0){
        $this->cartService->remove($id);
        return redirect( '/carts');
    }

    public function addCart(Request $request){
         $this->cartService->addCart($request);
         return redirect()->back();
    }
}
