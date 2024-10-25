<?php

use App\Http\Controllers\Admin\CartAdminController;
use App\Http\Services\UploadService;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\MenuControllerScreen;
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

       
        #Upload
        Route::post('upload/services', [UploadController::class, 'store']);

      


    });

});




