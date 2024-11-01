<?php

namespace App\Providers;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
=======
=======
>>>>>>> chi_tiet_don_hang_da_luu
=======
>>>>>>> get_product_by_menu
use App\View\Composers\MenuComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\CartComposer;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> add_to_cart
=======
>>>>>>> chi_tiet_don_hang_da_luu
=======
>>>>>>> get_product_by_menu


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
<<<<<<< HEAD
=======
        View::composer('header', MenuComposer::class);
        View::composer('cart', CartComposer::class);
>>>>>>> add_to_cart
=======
        View::composer('header', MenuComposer::class);
        View::composer('cart', CartComposer::class);
>>>>>>> chi_tiet_don_hang_da_luu
=======
        View::composer('header', MenuComposer::class);
        View::composer('cart', CartComposer::class);
>>>>>>> get_product_by_menu

    }
}