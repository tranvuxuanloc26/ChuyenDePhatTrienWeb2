<?php


namespace App\Http\Services\Product;

use App\Models\Product;

class ProductServiceScreen{
    const LIMIT =16 ;
    public function get($page = null){
        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
                              ->orderByDesc('id')
                              ->when($page != null, function ($query) use ($page){
                                  $query->offset($page * self::LIMIT);
                              })
                              ->limit(self::LIMIT)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                              ->get();
=======
                              ->get()
                              ;
>>>>>>> origin/tim_kiem_user_admin
=======
                              ->get();
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
                              ->get()
                              ;
>>>>>>> origin/search_product_admin
=======
                              ->get()
                              ;
>>>>>>> origin/search_product
=======
                              ->get();
>>>>>>> origin/san_pham_noi_bat
=======
                              ->get()
                              ;
>>>>>>> origin/san_pham_mơi_nhat
=======
                              ->get();
>>>>>>> origin/quan_ly_user
=======
                              ->get()
                              ;
>>>>>>> origin/profile
=======
                              ->get()
                              ;
>>>>>>> origin/lien_he_email
=======
                              ->get()
                              ;
>>>>>>> origin/forgot_password
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