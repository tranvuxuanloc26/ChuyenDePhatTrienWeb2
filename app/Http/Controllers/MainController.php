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
<<<<<<< HEAD

   
   
=======
>>>>>>> register
    public function __construct(SliderService $slider, MenuService $menu, ProductServiceScreen $product)
    {
        $this->slider = $slider;
        $this->menu = $menu;
        $this->product = $product;
<<<<<<< HEAD

=======
>>>>>>> register
    }
    public function index()
    {

        return view('home', [
            'title' => 'Shop Nước Hoa',
<<<<<<< HEAD

            'sliders' => $this->slider->show(),
            'menus' => $this->menu->show(),
            'products' => $this->product->get(),


          
           
        ]);

       
           

=======
            'sliders' => $this->slider->show(),
            'menus' => $this->menu->show(),
            'products' => $this->product->get(),
           
        ]);
>>>>>>> register
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



           
      
    }


    

   
    

   


=======
}
>>>>>>> register
