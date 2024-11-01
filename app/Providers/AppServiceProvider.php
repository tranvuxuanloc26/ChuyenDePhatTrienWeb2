<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
=======
use App\View\Composers\MenuComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\CartComposer;
>>>>>>> add_to_cart


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
=======
        View::composer('header', MenuComposer::class);
        View::composer('cart', CartComposer::class);
>>>>>>> add_to_cart

    }
}