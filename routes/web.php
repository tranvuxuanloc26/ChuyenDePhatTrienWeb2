<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\MainAdminController;
use App\Http\Controllers\Admin\Users\LoginController;


Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);


Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/', [MainAdminController::class, 'index'])->name('admin');
        Route::get('main', [MainAdminController::class, 'index'])->name('admin');

        
    });

});



