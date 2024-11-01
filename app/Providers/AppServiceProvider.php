<?php

namespace App\Providers;

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> gui_mail
=======
>>>>>>> load_more
use App\View\Composers\MenuComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\CartComposer;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> add_to_cart
=======
>>>>>>> chi_tiet_don_hang_da_luu
=======
>>>>>>> get_product_by_menu
=======
>>>>>>> gui_mail
=======
>>>>>>> load_more


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
=======
        View::composer('header', MenuComposer::class);
        View::composer('cart', CartComposer::class);
>>>>>>> gui_mail
=======
        View::composer('header', MenuComposer::class);
        View::composer('cart', CartComposer::class);
>>>>>>> load_more

    }
}