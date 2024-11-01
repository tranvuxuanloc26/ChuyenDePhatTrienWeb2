<?php

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
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\MenuController;
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
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\ProductController;

use App\Http\Controllers\ProductControllerScreen;
use App\Http\Controllers\Admin\MainAdminController;
use App\Http\Controllers\Admin\Users\LoginController;


Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);


Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/', [MainAdminController::class, 'index'])->name('admin');
        Route::get('main', [MainAdminController::class, 'index'])->name('admin');

        #Menu
        Route::prefix('menus')->group(function () {
            Route::get('add', [MenuController::class, 'create']);
            Route::post('add', [MenuController::class, 'store']);
            Route::get('list', [MenuController::class, 'index']);
            Route::get('edit/{menu}', [MenuController::class, 'show']);
            Route::post('edit/{menu}', [MenuController::class, 'update']);
            Route::DELETE('destroy', [MenuController::class, 'destroy']);
        });
        #Product
        Route::prefix('products')->group(function () {
            Route::get('add', [ProductController::class, 'create']);
            Route::post('add', [ProductController::class, 'store']);
            Route::get('list', [ProductController::class, 'index']);
            Route::get('edit/{product}', [ProductController::class, 'show']);
            Route::post('edit/{product}', [ProductController::class, 'update']);
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

        #Upload
        Route::post('upload/services', [UploadController::class, 'store']);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     


=======
      
>>>>>>> add_to_cart
=======
        #Cart
        Route::get('customers', [CartAdminController::class, 'index']);
        Route::get('customers/view/{customer}', [CartAdminController::class, 'show']);


>>>>>>> chi_tiet_don_hang_da_luu
=======
       


>>>>>>> get_product_by_menu
    });

});

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> get_product_by_menu
Route::get('/', [MainController::class, 'index']);



<<<<<<< HEAD




=======
Route::get('/', [MainController::class, 'index']);


=======
Route::get('/', [MainController::class, 'index']);
Route::post('/services/load-product', [MainController::class, 'loadProduct']);


Route::get('/danh-muc/{id}-{slug}.html', [MenuControllerScreen::class, 'index']);
>>>>>>> chi_tiet_don_hang_da_luu
=======
Route::get('/danh-muc/{id}-{slug}.html', [MenuControllerScreen::class, 'index']);
>>>>>>> get_product_by_menu
Route::get('/san-pham/{id}-{slug}.html', [ProductControllerScreen::class, 'index']);
// Route::post('/san-pham/{id}-{slug}.html', [ProductControllerScreen::class, 'indexQuickView']);



Route::post('add-cart', [CartController::class, 'index']);
Route::get('carts', [CartController::class, 'show']);
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




