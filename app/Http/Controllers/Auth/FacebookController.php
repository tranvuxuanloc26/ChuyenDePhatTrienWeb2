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
<<<<<<< HEAD
    public function handleFacebookCallback()
    {
        try {
            $facebookUser = Socialite::driver('facebook')
                ->stateless()
                ->setHttpClient(new Client(['verify' => false])) // Tắt SSL Verification
                ->user();
=======

    public function handleFacebookCallback()
    {
        try {
            $facebookUser = Socialite::driver('facebook')->stateless()->setHttpClient(new Client(['verify' => false]))->user();
>>>>>>> origin/dang_nhap_facebook
    
            // Cập nhật hoặc tạo người dùng với ảnh đại diện
            $user = User::updateOrCreate(
                ['email' => $facebookUser->getEmail()],
                [
                    'name' => $facebookUser->getName(),
                    'password' => bcrypt('password'), // Tạo mật khẩu ngẫu nhiên hoặc tùy chọn
<<<<<<< HEAD
                ]
            );
    
            // Cập nhật ảnh đại diện nếu chưa có hoặc cần cập nhật
            if (!$user->thumb) {
                $user->update(['thumb' => $facebookUser->getAvatar()]);
            }
    
            Auth::login($user);
    
            return redirect()->intended('/');
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
=======
                    'thumb' => $facebookUser->getAvatar(), // Lưu URL ảnh đại diện vào cơ sở dữ liệu
                ]
            );
    
            Auth::login($user);

            return redirect()->intended('/'); // Không cần sử dụng session thumb
        } catch (\Exception $e) {
    
>>>>>>> origin/dang_nhap_facebook
            return redirect('admin/users/login')->with('error', 'Đăng nhập thất bại, vui lòng thử lại.');
        }
    }
}
