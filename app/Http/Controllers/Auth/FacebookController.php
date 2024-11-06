<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
            $facebookUser = Socialite::driver('facebook')->stateless()->setHttpClient(new Client(['verify' => false]))->user();
    
            // Cập nhật hoặc tạo người dùng với ảnh đại diện
            $user = User::updateOrCreate(
                ['email' => $facebookUser->getEmail()],
                [
                    'name' => $facebookUser->getName(),
                    'password' => bcrypt('password'), // Tạo mật khẩu ngẫu nhiên hoặc tùy chọn
                    'thumb' => $facebookUser->getAvatar(), // Lưu URL ảnh đại diện vào cơ sở dữ liệu
                ]
            );
    
            Auth::login($user);

            return redirect()->intended('/'); // Không cần sử dụng session thumb
        } catch (\Exception $e) {
    
            return redirect('admin/users/login')->with('error', 'Đăng nhập thất bại, vui lòng thử lại.');
        }
    }
}
