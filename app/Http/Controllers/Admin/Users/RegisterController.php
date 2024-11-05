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
            'role' => 'required|in:0,1', // Thêm xác nhận vai trò

        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $request->input('role'), // Lưu vai trò
            'terms' => 'accepted' // Người dùng phải chọn checkbox
        ]);

        Auth::login($user);

          // Kiểm tra vai trò và điều hướng đến trang tương ứng
    if ($user->role == 1) { // Nếu là Admin
        return redirect()->route('admin')->with('success', 'Đăng ký thành công!'); // Đổi route thành route tương ứng với trang admin
    } else {
        return redirect()->route('home')->with('success', 'Đăng ký thành công!');
    }
    }
}
