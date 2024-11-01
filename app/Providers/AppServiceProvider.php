<?php

namespace App\Providers;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
=======
=======
>>>>>>> chi_tiet_don_hang_da_luu
use App\View\Composers\MenuComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\CartComposer;
<<<<<<< HEAD
>>>>>>> add_to_cart
=======
>>>>>>> chi_tiet_don_hang_da_luu


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
<<<<<<< HEAD
<<<<<<< HEAD
=======
        View::composer('header', MenuComposer::class);
        View::composer('cart', CartComposer::class);
>>>>>>> add_to_cart
=======
        View::composer('header', MenuComposer::class);
        View::composer('cart', CartComposer::class);
>>>>>>> chi_tiet_don_hang_da_luu

    }
}