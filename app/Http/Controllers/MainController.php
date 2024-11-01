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
    public function __construct(SliderService $slider, MenuService $menu, ProductServiceScreen $product)
    {
        $this->slider = $slider;
        $this->menu = $menu;
        $this->product = $product;
    }
    public function index()
    {

        return view('home', [
            'title' => 'Shop Nước Hoa',
            'sliders' => $this->slider->show(),
            'menus' => $this->menu->show(),
            'products' => $this->product->get(),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

          
           
        ]);

        dd($this->slider->show());
=======
           
        ]);
>>>>>>> add_to_cart
=======
           
        ]);
>>>>>>> chi_tiet_don_hang_da_luu
=======
           
        ]);
>>>>>>> gui_mail
    }

    public function loadProduct(Request $request)
    {
        $page = $request->input('page', 0);
        $result = $this->product->get($page);
        // dd($result);
        if(count($result) != 0){
            $html = view('product.list', ['products' => $result])->render();
            return response()->json(['html' => $html ]);
        }
        return response()->json(['html' => '' ]);
    }
<<<<<<< HEAD
=======
           
        ]);
    }

   
>>>>>>> get_product_by_menu
=======
>>>>>>> gui_mail
}
