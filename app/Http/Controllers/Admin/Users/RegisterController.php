<?php

namespace App\Http\Controllers\Admin\Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('admin.users.register', [
            'title' => 'Đăng ký hệ thống',


        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'role' => 'required|in:0,1', // Thêm xác nhận vai trò
=======
          
>>>>>>> origin/tim_kiem_user_admin
=======
          
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
          
>>>>>>> origin/search_product_admin
=======
          
>>>>>>> origin/search_product
=======
          
>>>>>>> origin/san_pham_noi_bat
=======
          
>>>>>>> origin/san_pham_mơi_nhat
=======
          
>>>>>>> origin/quan_ly_user

        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'role' => $request->input('role'), // Lưu vai trò
=======
>>>>>>> origin/tim_kiem_user_admin
=======
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
=======
>>>>>>> origin/san_pham_noi_bat
=======
>>>>>>> origin/san_pham_mơi_nhat
=======
>>>>>>> origin/quan_ly_user
            'terms' => 'accepted' // Người dùng phải chọn checkbox
        ]);

        Auth::login($user);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
          // Kiểm tra vai trò và điều hướng đến trang tương ứng
    if ($user->role == 1) { // Nếu là Admin
        return redirect()->route('admin')->with('success', 'Đăng ký thành công!'); // Đổi route thành route tương ứng với trang admin
    } else {
        return redirect()->route('home')->with('success', 'Đăng ký thành công!');
    }
=======
 
        return redirect()->route('home')->with('success', 'Đăng ký thành công!');
    
>>>>>>> origin/tim_kiem_user_admin
=======
 
        return redirect()->route('home')->with('success', 'Đăng ký thành công!');
    
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
 
        return redirect()->route('home')->with('success', 'Đăng ký thành công!');
    
>>>>>>> origin/search_product_admin
=======
 
        return redirect()->route('home')->with('success', 'Đăng ký thành công!');
    
>>>>>>> origin/search_product
=======
 
        return redirect()->route('home')->with('success', 'Đăng ký thành công!');
    
>>>>>>> origin/san_pham_noi_bat
=======
 
        return redirect()->route('home')->with('success', 'Đăng ký thành công!');
    
>>>>>>> origin/san_pham_mơi_nhat
=======
 
        return redirect()->route('home')->with('success', 'Đăng ký thành công!');
    
>>>>>>> origin/quan_ly_user
    }
}
