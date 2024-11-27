<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Services\CartService;
use App\Http\Controllers\Controller;

class CartAdminController extends Controller
{
    protected $cart;
    public function __construct(CartService $cart){
        $this->cart = $cart;
    }
    public function index(){
         return view('admin.carts.customer', [
            'title' => 'Danh Sách Đơn Hàng',
            'customers' => $this->cart->getCustomer()
         ]);
    }


    public function show(Customer $customer){
        $carts = $this->cart->getProductForCart($customer);
          return view('admin.carts.detail',[
            'title' => 'Chi Tiết Đơn Hàng ' . $customer->name,
            'customer' => $customer,
            'carts' => $carts
          ]);
    }

    public function updateStatus(Request $request)
    {
        $customer = Customer::find($request->customer_id);
        if ($customer) {
            if (in_array($customer->status, ['completed', 'cancelled'])) {
                return response()->json(['success' => false, 'message' => 'Không thể thay đổi trạng thái nếu đã Hoàn Thành hoặc Đã hủy'], 400);
            }
            $customer->status = $request->status;
            $customer->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 400);
    }
}
