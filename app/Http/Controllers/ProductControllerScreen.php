<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Product\ProductServiceScreen;
class ProductControllerScreen extends Controller
{
     protected $productServiceScreen;
     public function __construct(ProductServiceScreen $productServiceScreen)
     {
          $this->productServiceScreen = $productServiceScreen;
     }
     public function index($id = '', $slug = '')
     {
              $product = $this->productServiceScreen->show($id);
              $productMore = $this->productServiceScreen->more($id);

              return view('product.content', [
                   'title' => $product->name,
                   'product' => $product,
                   'products' => $productMore,


              ]);
     }

     // public function indexQuickView($id = '', $slug = '')
     // {
     //      $product = $this->productServiceScreen->show($id);
         

     //      $productMore = $this->productServiceScreen->more($id);

     //      return view('product.popup', [
     //           'title' => $product->name,
     //           'product' => $product,
     //           'products' => $productMore

     //      ]);
     // }


}
