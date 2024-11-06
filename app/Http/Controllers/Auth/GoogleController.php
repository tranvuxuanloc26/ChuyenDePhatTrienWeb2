<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use GuzzleHttp\Client;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')
                ->stateless()
                ->setHttpClient(new Client(['verify' => false])) // Tắt SSL Verification
                ->user();
<<<<<<< HEAD
    
=======

>>>>>>> origin/dang_nhap_google
            $user = User::firstOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'name' => $googleUser->getName(),
                    'password' => bcrypt('password'), // Tạo mật khẩu ngẫu nhiên hoặc tùy chọn
                    'thumb' => $googleUser->getAvatar(), // Lưu URL ảnh đại diện
<<<<<<< HEAD
                ]
            );
    
            // Cập nhật lại ảnh đại diện nếu chưa có hoặc cần cập nhật
            if (!$user->thumb) {
                $user->update(['thumb' => $googleUser->getAvatar()]);
            }
    
            Auth::login($user);
    
            return redirect()->intended('/');
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
=======

                ]
            );

            Auth::login($user);

            $thumb = $googleUser->getAvatar();

            return redirect()->intended('/')->with('thumb', $thumb); // Chuyển biến thumb đến view;
        } catch (\Exception $e) {
            \Log::error($e->getMessage()); // Ghi log lỗi
>>>>>>> origin/dang_nhap_google
            return redirect('admin/users/login')->with('error', 'Đăng nhập thất bại, vui lòng thử lại.');
        }
    }
}
