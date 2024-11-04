<?php

namespace App\Http\Controllers\Admin\Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function index(){
        return view('admin.users.register',[
            'title' => 'Đăng ký hệ thống',
            

        ]);

       
=======
=======
>>>>>>> menu_admin_detail
=======
>>>>>>> product_admin_detail
    public function index()
    {
        return view('admin.users.register', [
            'title' => 'Đăng ký hệ thống',


        ]);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> phan_quyen
=======
>>>>>>> menu_admin_detail
=======
>>>>>>> product_admin_detail
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'password' => 'required|min:6|confirmed'
=======
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:0,1', // Thêm xác nhận vai trò

>>>>>>> phan_quyen
=======
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:0,1', // Thêm xác nhận vai trò

>>>>>>> menu_admin_detail
=======
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:0,1', // Thêm xác nhận vai trò

>>>>>>> product_admin_detail
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
            'role' => $request->input('role'), // Lưu vai trò
>>>>>>> phan_quyen
=======
            'role' => $request->input('role'), // Lưu vai trò
>>>>>>> menu_admin_detail
=======
            'role' => $request->input('role'), // Lưu vai trò
>>>>>>> product_admin_detail
            'terms' => 'accepted' // Người dùng phải chọn checkbox
        ]);

        Auth::login($user);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return redirect()->route('login')->with('success', 'Đăng ký thành công!');
=======
        return redirect()->route('home')->with('success', 'Đăng ký thành công!');
>>>>>>> logout
    }
    
=======
=======
>>>>>>> menu_admin_detail
=======
>>>>>>> product_admin_detail
          // Kiểm tra vai trò và điều hướng đến trang tương ứng
    if ($user->role == 1) { // Nếu là Admin
        return redirect()->route('admin')->with('success', 'Đăng ký thành công!'); // Đổi route thành route tương ứng với trang admin
    } else {
        return redirect()->route('home')->with('success', 'Đăng ký thành công!');
    }
    }
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> phan_quyen
=======
>>>>>>> menu_admin_detail
=======
>>>>>>> product_admin_detail
}
