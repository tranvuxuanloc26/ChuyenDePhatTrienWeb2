<?php

use App\Http\Services\UploadService;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\WishController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\MenuControllerScreen;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UploadController;

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\ProductControllerScreen;
use App\Http\Controllers\Admin\CartAdminController;
use App\Http\Controllers\Admin\MainAdminController;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\Users\RegisterController;

    #Login
    Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
    Route::post('admin/users/login/store', [LoginController::class, 'store']);

    #logout
    Route::post('admin/users/logout', [LoginController::class, 'logout'])->name('logout');

#Register
Route::get('admin/users/register', [RegisterController::class,'index'])->name('register');
Route::post('admin/users/register/store', [RegisterController::class, 'store']);
#Role
Route::post('/admin/users/toggle-role/{id}', [UserController::class, 'toggleRole']);

#Admin
Route::middleware(['auth', 'role:1,2'])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/', [MainAdminController::class, 'index'])->name('admin');
        Route::get('main', [MainAdminController::class, 'index'])->name('admin');



        // Các route dành cho cả role 1 và role 2 (chỉ truy cập menu, sản phẩm, slider)
        Route::middleware('role:1,2')->group(function () {
      
        #Product
        Route::prefix('products')->group(function () {
            Route::get('add', [ProductController::class, 'create']);
            Route::post('add', [ProductController::class, 'store']);
            Route::get('list', [ProductController::class, 'index']);
            Route::get('edit/{product}', [ProductController::class, 'show']);
            Route::post('edit/{product}', [ProductController::class, 'update']);
            Route::get('detail/{product}', [ProductController::class, 'showDetail']);

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
      
    });

      // Các route chỉ dành cho role 2 (truy cập được tất cả các route)
      Route::middleware('role:2')->group(function () {
        Route::prefix('admin')->group(function () {

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

           #User
         Route::prefix('users')->group(function () {
          
            Route::get('list', [UserController::class, 'index']);
            Route::DELETE('destroy', [UserController::class, 'destroy']);



        });
          
    });
    });
        #Upload
        Route::post('upload/services', [UploadController::class, 'store']);

        #Cart
        Route::get('customers', [CartAdminController::class, 'index']);
        Route::get('customers/view/{customer}', [CartAdminController::class, 'show']);
     

   #Role

    });

});


#Trang chủ
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/lang/{lang}', [MainController::class , 'setLanguage'])->name('set.language');

Route::post('/services/load-product', [MainController::class, 'loadProduct']);


Route::get('/danh-muc/{id}-{slug}.html', [MenuControllerScreen::class, 'index']);
Route::get('/san-pham/{id}-{slug}.html', [ProductControllerScreen::class, 'index']);
// Route::post('/san-pham/{id}-{slug}.html', [ProductControllerScreen::class, 'indexQuickView']);



Route::post('add-cart', [CartController::class, 'index']);
Route::get('carts', [CartController::class, 'show']);
Route::post('update-cart', [CartController::class, 'update']);
Route::get('carts/delete/{id}', [CartController::class, 'remove']);
Route::post('carts', [CartController::class, 'addCart']);

#Đăng nhập gmail 
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


#Đăng nhập facebook

Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook'])->name('facebook.login');
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);


Route::middleware(['auth'])->group(function () {
    Route::post('wish-list', [WishlistController::class, 'index'])->name('wishlist.add');
    Route::get('wishlists', [WishlistController::class, 'show'])->name('wishlist.show');
});






