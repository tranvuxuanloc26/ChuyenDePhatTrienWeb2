<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;

use App\View\Composers\MenuComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use App\View\Composers\CartComposer;




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

        View::composer('header', MenuComposer::class);
        View::composer('cart', CartComposer::class);


    }
}