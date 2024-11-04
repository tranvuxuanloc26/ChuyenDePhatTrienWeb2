<?php

namespace App\Providers;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;

use App\View\Composers\MenuComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use App\View\Composers\CartComposer;




=======
=======
>>>>>>> logout
=======
>>>>>>> phan_quyen
=======
>>>>>>> menu_admin_detail
use App\View\Composers\MenuComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\CartComposer;


<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> register
=======
>>>>>>> logout
=======
>>>>>>> phan_quyen
=======
>>>>>>> menu_admin_detail
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

        View::composer('header', MenuComposer::class);
        View::composer('cart', CartComposer::class);


=======
        View::composer('header', MenuComposer::class);
        View::composer('cart', CartComposer::class);

>>>>>>> register
=======
        View::composer('header', MenuComposer::class);
        View::composer('cart', CartComposer::class);

>>>>>>> logout
=======
        View::composer('header', MenuComposer::class);
        View::composer('cart', CartComposer::class);

>>>>>>> phan_quyen
=======
        View::composer('header', MenuComposer::class);
        View::composer('cart', CartComposer::class);

>>>>>>> menu_admin_detail
    }
}