<?php

namespace App\Http\Controllers\Admin\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;


class LoginController extends Controller
{
    //

    public function index (){
        return view('admin.users.login',[
            'title' => 'Đăng nhập hệ thống',
            

        ]);
    }
<<<<<<< HEAD
    public function store(Request $request){
         
=======
    public function store(Request $request)
    {
>>>>>>> phan_quyen
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);
<<<<<<< HEAD

        if(Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password'),      
            ], $request->input('remember'))){
            

<<<<<<< HEAD
<<<<<<< HEAD
            return redirect()->route('admin');
=======
            return redirect()->route('admin')->with('success', 'Đăng nhập thành công!');
>>>>>>> register
=======
            return redirect()->route('home')->with('success', 'Đăng nhập thành công!');
>>>>>>> logout
        }
                        Session::flash('error','Email or password is not incorrect');
        return redirect()->back();
    }
<<<<<<< HEAD
=======
=======
    
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),      
        ], $request->input('remember'))) {
            $user = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
    
            // Kiểm tra vai trò của người dùng và định hướng trang tương ứng
            switch ($user->role) {
                case 0:
                    return redirect()->route('home')->with('success', 'Đăng nhập thành công!');
                case 1:
                    return redirect()->route('admin')->with('success', 'Đăng nhập thành công!');
                case 2:
                    return redirect()->route('admin')->with('success', 'Đăng nhập thành công!');
                default:
                    return redirect()->route('home')->with('error', 'Vai trò không hợp lệ.');
            }
        }
    
        Session::flash('error', 'Email hoặc mật khẩu không chính xác.');
        return redirect()->back();
    }
>>>>>>> phan_quyen
        //  đăng xuất
        public function logout(Request $request)
        {
            Auth::logout(); // Đăng xuất người dùng
    
         
            return redirect('/'); 
        }
<<<<<<< HEAD
>>>>>>> logout
=======
>>>>>>> phan_quyen
}                    