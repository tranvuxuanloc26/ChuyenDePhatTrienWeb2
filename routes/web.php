<?php

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
use App\Http\Controllers\Admin\CartAdminController;
use App\Http\Services\UploadService;
=======

>>>>>>> add_to_cart
=======
use App\Http\Controllers\Admin\CartAdminController;
use App\Http\Services\UploadService;
>>>>>>> chi_tiet_don_hang_da_luu
=======
use App\Http\Controllers\Admin\CartAdminController;
use App\Http\Services\UploadService;
>>>>>>> get_product_by_menu
=======
use App\Http\Controllers\Admin\CartAdminController;
use App\Http\Services\UploadService;
>>>>>>> gui_mail
=======
use App\Http\Controllers\Admin\CartAdminController;
use App\Http\Services\UploadService;
>>>>>>> load_more
=======
use App\Http\Controllers\Admin\CartAdminController;
use App\Http\Services\UploadService;
>>>>>>> luu_thong_tin_don_hang
=======
use App\Http\Controllers\Admin\CartAdminController;
use App\Http\Services\UploadService;
>>>>>>> product
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\MenuController;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\MenuControllerScreen;
=======
>>>>>>> add_to_cart
=======
use App\Http\Controllers\MenuControllerScreen;
>>>>>>> chi_tiet_don_hang_da_luu
=======
use App\Http\Controllers\MenuControllerScreen;
>>>>>>> get_product_by_menu
=======
use App\Http\Controllers\MenuControllerScreen;
>>>>>>> gui_mail
=======
use App\Http\Controllers\MenuControllerScreen;
>>>>>>> load_more
=======
use App\Http\Controllers\MenuControllerScreen;
>>>>>>> luu_thong_tin_don_hang
=======
use App\Http\Controllers\MenuControllerScreen;
>>>>>>> product
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\ProductController;

use App\Http\Controllers\ProductControllerScreen;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Route;

>>>>>>> login
=======
>>>>>>> luu_thong_tin_don_hang
=======

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\MenuController;

use App\Http\Controllers\Admin\UploadController;



>>>>>>> menu
=======
>>>>>>> product
=======

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UploadController;

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProductControllerScreen;
>>>>>>> product_detail
use App\Http\Controllers\Admin\MainAdminController;
use App\Http\Controllers\Admin\Users\LoginController;


Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);


Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/', [MainAdminController::class, 'index'])->name('admin');
        Route::get('main', [MainAdminController::class, 'index'])->name('admin');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> luu_thong_tin_don_hang
=======
>>>>>>> menu
=======
>>>>>>> product
=======
>>>>>>> product_detail
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
>>>>>>> product
=======
>>>>>>> product_detail
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
=======
>>>>>>> product_detail
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
=======
    
>>>>>>> product
=======
>>>>>>> product_detail

        #Upload
        Route::post('upload/services', [UploadController::class, 'store']);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     


=======
      
>>>>>>> add_to_cart
=======
=======
>>>>>>> product
        #Cart
        Route::get('customers', [CartAdminController::class, 'index']);
        Route::get('customers/view/{customer}', [CartAdminController::class, 'show']);


<<<<<<< HEAD
>>>>>>> chi_tiet_don_hang_da_luu
=======
       


>>>>>>> get_product_by_menu
=======
      


>>>>>>> gui_mail
=======
      


>>>>>>> load_more
=======
        
>>>>>>> login
=======
        #Cart
        Route::get('customers', [CartAdminController::class, 'index']);


>>>>>>> luu_thong_tin_don_hang
=======
       
        #Upload
        Route::post('upload/services', [UploadController::class, 'store']);

        

>>>>>>> menu
=======
>>>>>>> product
=======
      
>>>>>>> product_detail
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

=======
>>>>>>> get_product_by_menu
Route::get('/', [MainController::class, 'index']);



<<<<<<< HEAD
=======
>>>>>>> menu
=======
>>>>>>> product




<<<<<<< HEAD
<<<<<<< HEAD
=======
Route::get('/', [MainController::class, 'index']);


=======
=======
>>>>>>> gui_mail
=======
>>>>>>> load_more
=======
>>>>>>> luu_thong_tin_don_hang
Route::get('/', [MainController::class, 'index']);
Route::post('/services/load-product', [MainController::class, 'loadProduct']);


Route::get('/danh-muc/{id}-{slug}.html', [MenuControllerScreen::class, 'index']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> chi_tiet_don_hang_da_luu
=======
Route::get('/danh-muc/{id}-{slug}.html', [MenuControllerScreen::class, 'index']);
>>>>>>> get_product_by_menu
=======
>>>>>>> gui_mail
=======
>>>>>>> load_more
=======
>>>>>>> luu_thong_tin_don_hang
=======
Route::get('/', [MainController::class, 'index']);


>>>>>>> product_detail
Route::get('/san-pham/{id}-{slug}.html', [ProductControllerScreen::class, 'index']);
// Route::post('/san-pham/{id}-{slug}.html', [ProductControllerScreen::class, 'indexQuickView']);



<<<<<<< HEAD
Route::post('add-cart', [CartController::class, 'index']);
Route::get('carts', [CartController::class, 'show']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

// Route::post('carts', [CartController::class, 'addCart']);
>>>>>>> add_to_cart
=======
Route::post('update-cart', [CartController::class, 'update']);
Route::get('carts/delete/{id}', [CartController::class, 'remove']);
Route::post('carts', [CartController::class, 'addCart']);
>>>>>>> chi_tiet_don_hang_da_luu
=======
Route::post('update-cart', [CartController::class, 'update']);
Route::get('carts/delete/{id}', [CartController::class, 'remove']);
Route::post('carts', [CartController::class, 'addCart']);
>>>>>>> get_product_by_menu
=======
Route::post('update-cart', [CartController::class, 'update']);
Route::get('carts/delete/{id}', [CartController::class, 'remove']);
Route::post('carts', [CartController::class, 'addCart']);
>>>>>>> gui_mail
=======
Route::post('update-cart', [CartController::class, 'update']);
Route::get('carts/delete/{id}', [CartController::class, 'remove']);
>>>>>>> load_more


=======
>>>>>>> login
=======
Route::post('update-cart', [CartController::class, 'update']);
Route::get('carts/delete/{id}', [CartController::class, 'remove']);
Route::post('carts', [CartController::class, 'addCart']);


>>>>>>> luu_thong_tin_don_hang


=======
>>>>>>> menu
=======
>>>>>>> product
=======


// Route::post('carts', [CartController::class, 'addCart']);




>>>>>>> product_detail
