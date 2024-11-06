<?php

use App\Http\Services\UploadService;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/quan_ly_user
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\MenuControllerScreen;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProductControllerScreen;

use App\Http\Controllers\Admin\CartAdminController;
use App\Http\Controllers\Admin\MainAdminController;
<<<<<<< HEAD
use App\Http\Controllers\Admin\Users\LoginController;
=======
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
use App\Http\Controllers\WishController;
=======
use App\Http\Controllers\WishController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PasswordController;
>>>>>>> origin/profile
=======
use App\Http\Controllers\WishController;
use App\Http\Controllers\ContactController;
>>>>>>> origin/lien_he_email
=======
use App\Http\Controllers\WishController;
>>>>>>> origin/forgot_password
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\MenuControllerScreen;
use App\Http\Controllers\Auth\GoogleController;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UploadController;

=======

use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UploadController;
>>>>>>> origin/profile
=======
use App\Http\Controllers\Admin\SliderController;

use App\Http\Controllers\Admin\UploadController;
>>>>>>> origin/lien_he_email
=======
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UploadController;

>>>>>>> origin/forgot_password
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\ProductControllerScreen;
use App\Http\Controllers\Admin\CartAdminController;
use App\Http\Controllers\Admin\MainAdminController;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\Admin\Users\LoginController;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\Auth\ForgotPasswordController;
>>>>>>> origin/tim_kiem_user_admin
=======
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
use App\Http\Controllers\Auth\ForgotPasswordController;
>>>>>>> origin/search_product_admin
=======
use App\Http\Controllers\Auth\ForgotPasswordController;
>>>>>>> origin/search_product
=======
>>>>>>> origin/san_pham_noi_bat
=======
>>>>>>> origin/san_pham_mơi_nhat
=======
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\Admin\Users\LoginController;
>>>>>>> origin/quan_ly_user
=======
use App\Http\Controllers\Auth\ForgotPasswordController;
>>>>>>> origin/profile
=======
use App\Http\Controllers\Auth\ForgotPasswordController;
>>>>>>> origin/lien_he_email
=======
use App\Http\Controllers\Auth\ForgotPasswordController;
>>>>>>> origin/forgot_password
use App\Http\Controllers\Admin\Users\RegisterController;

    #Login
    Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
    Route::post('admin/users/login/store', [LoginController::class, 'store']);

    #logout
    Route::post('admin/users/logout', [LoginController::class, 'logout'])->name('logout');

#Register
Route::get('admin/users/register', [RegisterController::class,'index'])->name('register');
Route::post('admin/users/register/store', [RegisterController::class, 'store']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
=======
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password
#Role
Route::post('/admin/users/toggle-role/{id}', [UserController::class, 'toggleRole']);





// Route hiển thị form quên mật khẩu
Route::get('forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('forgot.password');

// Route xử lý gửi email reset mật khẩu
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('forgot.password.send');

// Route hiển thị form reset mật khẩu
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');

// Route xử lý reset mật khẩu
Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/tim_kiem_user_admin


=======
#Role
Route::post('/admin/users/toggle-role/{id}', [UserController::class, 'toggleRole']);

>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======


>>>>>>> origin/search_product_admin
=======


>>>>>>> origin/search_product
=======
#Role
Route::post('/admin/users/toggle-role/{id}', [UserController::class, 'toggleRole']);

>>>>>>> origin/san_pham_noi_bat
=======
#Role
Route::post('/admin/users/toggle-role/{id}', [UserController::class, 'toggleRole']);

>>>>>>> origin/san_pham_mơi_nhat
=======
#Role
Route::post('/admin/users/toggle-role/{id}', [UserController::class, 'toggleRole']);

>>>>>>> origin/quan_ly_user
=======


>>>>>>> origin/profile
=======


>>>>>>> origin/lien_he_email
=======


>>>>>>> origin/forgot_password
#Admin
Route::middleware(['auth', 'role:1,2'])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/', [MainAdminController::class, 'index'])->name('admin');
        Route::get('main', [MainAdminController::class, 'index'])->name('admin');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        #Menu
        Route::prefix('menus')->group(function () {
            Route::get('add', [MenuController::class, 'create']);
            Route::post('add', [MenuController::class, 'store']);
            Route::get('list', [MenuController::class, 'index']);
            Route::get('edit/{menu}', [MenuController::class, 'show']);
            Route::post('edit/{menu}', [MenuController::class, 'update']);
            Route::get('detail/{menu}', [MenuController::class, 'showDetail']);

            Route::DELETE('destroy', [MenuController::class, 'destroy']);
        });
=======
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
=======
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password


        // Các route dành cho cả role 1 và role 2 (chỉ truy cập menu, sản phẩm, slider)
        Route::middleware('role:1,2')->group(function () {
      
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password
        #Product
        Route::prefix('products')->group(function () {
            Route::get('add', [ProductController::class, 'create']);
            Route::post('add', [ProductController::class, 'store']);
            Route::get('list', [ProductController::class, 'index']);
            Route::get('edit/{product}', [ProductController::class, 'show']);
            Route::post('edit/{product}', [ProductController::class, 'update']);
            Route::get('detail/{product}', [ProductController::class, 'showDetail']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
            Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');

            Route::get('/search', [ProductController::class, 'search'])->name('admin.products.search');
>>>>>>> origin/tim_kiem_user_admin
=======
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
            Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');

            Route::get('/search', [ProductController::class, 'search'])->name('admin.products.search');
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
=======
>>>>>>> origin/san_pham_noi_bat
=======
>>>>>>> origin/san_pham_mơi_nhat
=======
>>>>>>> origin/quan_ly_user
=======
            Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');

            Route::get('/search', [ProductController::class, 'search'])->name('admin.products.search');
>>>>>>> origin/profile
=======
            Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');

            Route::get('/search', [ProductController::class, 'search'])->name('admin.products.search');
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password

            Route::DELETE('destroy', [ProductController::class, 'destroy']);

        });

        #Slider
        Route::prefix('sliders')->group(function () {
            Route::get('add', [SliderController::class, 'create']);
            Route::post('add', [SliderController::class, 'store']);
            Route::get('list', [SliderController::class, 'index']);
            Route::get('edit/{slider}', [SliderController::class, 'show']);
            Route::post('edit/{slider}', [SliderController::class, 'update']);
            Route::DELETE('destroy', [SliderController::class, 'destroy']);

        });
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
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
=======
      
>>>>>>> origin/profile
=======
      
>>>>>>> origin/lien_he_email
=======
      
>>>>>>> origin/forgot_password
    });

      // Các route chỉ dành cho role 2 (truy cập được tất cả các route)
      Route::middleware('role:2')->group(function () {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     
=======
        Route::prefix('admin')->group(function () {
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
     
>>>>>>> origin/search_product_admin
=======
     
>>>>>>> origin/search_product
=======
        Route::prefix('admin')->group(function () {
>>>>>>> origin/san_pham_noi_bat
=======
        Route::prefix('admin')->group(function () {
>>>>>>> origin/san_pham_mơi_nhat
=======
>>>>>>> origin/quan_ly_user
=======
     
>>>>>>> origin/profile
=======
     
>>>>>>> origin/lien_he_email
=======
     
>>>>>>> origin/forgot_password

          #Menu
          Route::prefix('menus')->group(function () {
            Route::get('add', [MenuController::class, 'create']);
            Route::post('add', [MenuController::class, 'store']);
            Route::get('list', [MenuController::class, 'index']);
            Route::get('edit/{menu}', [MenuController::class, 'show']);
            Route::post('edit/{menu}', [MenuController::class, 'update']);
            Route::get('detail/{menu}', [MenuController::class, 'showDetail']);

            Route::DELETE('destroy', [MenuController::class, 'destroy']);
        });
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password

           #User
         Route::prefix('users')->group(function () {
          
            Route::get('list', [UserController::class, 'index']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Route::get('search', [UserController::class, 'search'])->name('admin.users.search'); // Route tìm kiếm
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
           #User
           Route::prefix('users')->group(function () {
          
            Route::get('list', [UserController::class, 'index']);
>>>>>>> origin/quan_ly_user
=======
            Route::get('search', [UserController::class, 'search'])->name('admin.users.search'); // Route tìm kiếm
>>>>>>> origin/profile
=======
            Route::get('search', [UserController::class, 'search'])->name('admin.users.search'); // Route tìm kiếm
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password
            Route::DELETE('destroy', [UserController::class, 'destroy']);



        });
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
          
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
    });
>>>>>>> origin/tim_kiem_user_admin
=======
    });
    });
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
    
    });
>>>>>>> origin/search_product_admin
=======
    
    });
>>>>>>> origin/search_product
=======
    });
    });
>>>>>>> origin/san_pham_noi_bat
=======
    });
    });
>>>>>>> origin/san_pham_mơi_nhat
=======
    });
>>>>>>> origin/quan_ly_user
=======
          
    
    });
>>>>>>> origin/profile
=======
          
    
    });
>>>>>>> origin/lien_he_email
=======
          
    
    });
>>>>>>> origin/forgot_password
        #Upload
        Route::post('upload/services', [UploadController::class, 'store']);

        #Cart
        Route::get('customers', [CartAdminController::class, 'index']);
        Route::get('customers/view/{customer}', [CartAdminController::class, 'show']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
     

   #Role
>>>>>>> origin/tim_kiem_user_admin
=======
     

   #Role
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
     

   #Role
>>>>>>> origin/search_product_admin
=======
     

   #Role
>>>>>>> origin/search_product
=======
     

   #Role
>>>>>>> origin/san_pham_noi_bat
=======
     

   #Role
>>>>>>> origin/san_pham_mơi_nhat
=======
     

   #Role
>>>>>>> origin/quan_ly_user
=======
     

   #Role
>>>>>>> origin/profile
=======
     

   #Role
>>>>>>> origin/lien_he_email
=======
     

   #Role
>>>>>>> origin/forgot_password

    });

});

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
#Trang chủ
Route::get('/', [MainController::class, 'index'])->name('home');
=======
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
=======
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password

#Trang chủ
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/lang/{lang}', [MainController::class , 'setLanguage'])->name('set.language');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password
Route::post('/services/load-product', [MainController::class, 'loadProduct']);


Route::get('/danh-muc/{id}-{slug}.html', [MenuControllerScreen::class, 'index']);
Route::get('/san-pham/{id}-{slug}.html', [ProductControllerScreen::class, 'index']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
=======
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
Route::get('/products/popularity', [ProductControllerScreen::class, 'getFeaturedProducts'])->name('products.popularity');
Route::get('/products/newest', [ProductControllerScreen::class, 'getNewestProducts'])->name('products.newest');
Route::get('/search', [ProductControllerScreen::class, 'search'])->name('search');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/tim_kiem_user_admin
=======
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
=======
Route::get('/products/popularity', [ProductControllerScreen::class, 'getFeaturedProducts'])->name('products.popularity');

>>>>>>> origin/san_pham_noi_bat
=======
Route::get('/products/popularity', [ProductControllerScreen::class, 'getFeaturedProducts'])->name('products.popularity');
Route::get('/products/newest', [ProductControllerScreen::class, 'getNewestProducts'])->name('products.newest');

>>>>>>> origin/san_pham_mơi_nhat
=======
>>>>>>> origin/quan_ly_user
=======
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
Route::get('/products/popularity', [ProductControllerScreen::class, 'getFeaturedProducts'])->name('products.popularity');
Route::get('/products/newest', [ProductControllerScreen::class, 'getNewestProducts'])->name('products.newest');

>>>>>>> origin/forgot_password
// Route::post('/san-pham/{id}-{slug}.html', [ProductControllerScreen::class, 'indexQuickView']);



Route::post('add-cart', [CartController::class, 'index']);
Route::get('carts', [CartController::class, 'show']);
Route::post('update-cart', [CartController::class, 'update']);
Route::get('carts/delete/{id}', [CartController::class, 'remove']);
Route::post('carts', [CartController::class, 'addCart']);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password
#Đăng nhập gmail 
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


#Đăng nhập facebook

Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook'])->name('facebook.login');
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);


Route::middleware(['auth'])->group(function () {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    Route::get('/user/profile', [UserController::class, 'editProfile'])->name('user.profile');
Route::post('/user/profile', [UserController::class, 'updateProfile'])->name('user.profile.update');
    Route::get('/change-password', [PasswordController::class, 'showChangePasswordForm'])->name('password.change');
    Route::post('/change-password', [PasswordController::class, 'updatePassword'])->name('password.update');
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password
    Route::post('wish-list', [WishlistController::class, 'index'])->name('wishlist.add');
    Route::get('wishlists', [WishlistController::class, 'show'])->name('wishlist.show');
});

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD


<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

>>>>>>> origin/profile
=======
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

>>>>>>> origin/lien_he_email
=======


>>>>>>> origin/forgot_password



