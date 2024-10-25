<?php

namespace App\Http\Controllers;

use App\Http\Services\Menu\MenuService;
use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderService;
use App\Http\Services\Product\ProductServiceScreen;

class MainController extends Controller
{
    protected $slider;
    protected $menu;
    protected $product;
    public function __construct( MenuService $menu)
    {
        $this->menu = $menu;
        $this->product = $product;
    }
    public function index()
    {

        return view('home', [
            'title' => 'Shop Nước Hoa',
            'menus' => $this->menu->show(),
            'products' => $this->product->get(),
           
        ]);
    }

   
}
