<?php


namespace App\Http\Services\Product;

use App\Models\Product;

class ProductServiceScreen{
    const LIMIT =16 ;
    public function get($page = null){
        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                            ->where('active', 1)
=======
>>>>>>> register
=======
>>>>>>> logout
=======
>>>>>>> phan_quyen
                              ->orderByDesc('id')
                              ->when($page != null, function ($query) use ($page){
                                  $query->offset($page * self::LIMIT);
                              })
                              ->limit(self::LIMIT)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                             
=======
>>>>>>> register
=======
>>>>>>> logout
=======
>>>>>>> phan_quyen
                              ->get();
    }

    public function show($id){
        return Product::where('id', $id)
        ->where('active',1)
        ->with( 'menu')
        ->firstOrFail();
    }

    public function more($id){
        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
                          ->where('active', 1)
                          ->where('id', '!=', $id)
                          ->orderByDesc('id')
                          ->limit(8)
                          ->get();
    }
}