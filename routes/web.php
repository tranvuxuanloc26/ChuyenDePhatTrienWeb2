<?php

use App\Http\Services\UploadService;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD





use App\Http\Controllers\Admin\CartAdminController;

use App\Http\Controllers\CartController;

use App\Http\Controllers\MenuControllerScreen;






use Illuminate\Support\Facades\Route;







use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UploadController;

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProductControllerScreen;

use App\Http\Controllers\Admin\MainAdminController;
use App\Http\Controllers\Admin\Users\LoginController;


Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);


=======
=======
>>>>>>> logout
=======
>>>>>>> phan_quyen
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\MenuControllerScreen;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProductControllerScreen;

use App\Http\Controllers\Admin\CartAdminController;
use App\Http\Controllers\Admin\MainAdminController;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\Users\RegisterController;

    #Login
    Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
    Route::post('admin/users/login/store', [LoginController::class, 'store']);

<<<<<<< HEAD
<<<<<<< HEAD
=======
    #logout
    Route::post('admin/users/logout', [LoginController::class, 'logout'])->name('logout');

>>>>>>> logout
=======
    #logout
    Route::post('admin/users/logout', [LoginController::class, 'logout'])->name('logout');

>>>>>>> phan_quyen
#Register
Route::get('admin/users/register', [RegisterController::class,'index'])->name('register');
Route::post('admin/users/register/store', [RegisterController::class, 'store']);


#Admin
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> register
=======
>>>>>>> logout
=======
>>>>>>> phan_quyen
Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/', [MainAdminController::class, 'index'])->name('admin');
        Route::get('main', [MainAdminController::class, 'index'])->name('admin');
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD










=======
>>>>>>> register
=======
>>>>>>> logout
=======
        Route::get('/', [MainController::class, 'index'])->name('home');

>>>>>>> phan_quyen
        #Menu
        Route::prefix('menus')->group(function () {
            Route::get('add', [MenuController::class, 'create']);
            Route::post('add', [MenuController::class, 'store']);
            Route::get('list', [MenuController::class, 'index']);
            Route::get('edit/{menu}', [MenuController::class, 'show']);
            Route::post('edit/{menu}', [MenuController::class, 'update']);
            Route::DELETE('destroy', [MenuController::class, 'destroy']);
        });
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD


=======
>>>>>>> register
=======
>>>>>>> logout
=======
>>>>>>> phan_quyen
        #Product
        Route::prefix('products')->group(function () {
            Route::get('add', [ProductController::class, 'create']);
            Route::post('add', [ProductController::class, 'store']);
            Route::get('list', [ProductController::class, 'index']);
            Route::get('edit/{product}', [ProductController::class, 'show']);
            Route::post('edit/{product}', [ProductController::class, 'update']);
            Route::DELETE('destroy', [ProductController::class, 'destroy']);

        });

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> register
=======
>>>>>>> logout
=======
>>>>>>> phan_quyen
        #Slider
        Route::prefix('sliders')->group(function () {
            Route::get('add', [SliderController::class, 'create']);
            Route::post('add', [SliderController::class, 'store']);
            Route::get('list', [SliderController::class, 'index']);
            Route::get('edit/{slider}', [SliderController::class, 'show']);
            Route::post('edit/{slider}', [SliderController::class, 'update']);
            Route::DELETE('destroy', [SliderController::class, 'destroy']);

        });

        #Upload
        Route::post('upload/services', [UploadController::class, 'store']);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> register
=======
>>>>>>> logout
=======
>>>>>>> phan_quyen
        #Cart
        Route::get('customers', [CartAdminController::class, 'index']);
        Route::get('customers/view/{customer}', [CartAdminController::class, 'show']);


<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD


        #Cart
        Route::get('customers', [CartAdminController::class, 'index']);


        #Upload
        Route::post('upload/services', [UploadController::class, 'store']);

        
=======
>>>>>>> register
=======
>>>>>>> logout
=======
>>>>>>> phan_quyen
    });

});

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD



Route::get('/', [MainController::class, 'index']);






=======
#Trang chủ
>>>>>>> register
Route::get('/', [MainController::class, 'index']);
=======
#Trang chủ
Route::get('/', [MainController::class, 'index'])->name('home');
>>>>>>> logout
=======
#Trang chủ
Route::get('/', [MainController::class, 'index'])->name('home');
>>>>>>> phan_quyen
Route::post('/services/load-product', [MainController::class, 'loadProduct']);


Route::get('/danh-muc/{id}-{slug}.html', [MenuControllerScreen::class, 'index']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD


Route::get('/san-pham/{id}-{slug}.html', [ProductControllerScreen::class, 'index']);

Route::post('add-cart', [CartController::class, 'index']);
Route::get('carts', [CartController::class, 'show']);


=======
=======
>>>>>>> logout
=======
>>>>>>> phan_quyen
Route::get('/san-pham/{id}-{slug}.html', [ProductControllerScreen::class, 'index']);
// Route::post('/san-pham/{id}-{slug}.html', [ProductControllerScreen::class, 'indexQuickView']);



Route::post('add-cart', [CartController::class, 'index']);
Route::get('carts', [CartController::class, 'show']);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> register
=======
>>>>>>> logout
=======
>>>>>>> phan_quyen
Route::post('update-cart', [CartController::class, 'update']);
Route::get('carts/delete/{id}', [CartController::class, 'remove']);
Route::post('carts', [CartController::class, 'addCart']);



<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> register
=======

>>>>>>> logout
=======

>>>>>>> phan_quyen
