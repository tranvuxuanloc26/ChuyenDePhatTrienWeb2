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
    public function store(Request $request){
         
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

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
        //  đăng xuất
        public function logout(Request $request)
        {
            Auth::logout(); // Đăng xuất người dùng
    
         
            return redirect('/'); 
        }
>>>>>>> logout
}                    