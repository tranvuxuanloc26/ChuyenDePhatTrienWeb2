<?php


namespace App\Http\Services\Product;

use App\Models\Product;

class ProductServiceScreen{
    const LIMIT =16 ;
    public function get($page = null){
        return Product::select('products.id', 'products.name', 'products.price', 'products.price_sale', 'products.thumb')
        ->withCount(['carts as total_qty' => function ($query) {
            $query->select(\DB::raw('SUM(pty)'))
                ->whereHas('customer', function ($query) {
                    $query->where('status', 'completed');
                });
        }])
        ->orderByDesc('id')
        ->when($page != null, function ($query) use ($page) {
            $query->offset($page * self::LIMIT);
        })
        ->limit(self::LIMIT)
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