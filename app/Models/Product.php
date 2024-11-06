<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'content',
        'menu_id',
        'price',
        'price_sale',
        'thumb',
        'active',
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
<<<<<<< HEAD
=======
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
>>>>>>> origin/quan_ly_user
    ];
    public function menu()
     {
        return $this->hasOne(Menu::class, 'id', 'menu_id');
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
=======
>>>>>>> origin/san_pham_noi_bat
=======
>>>>>>> origin/san_pham_mơi_nhat
=======
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password
=======
>>>>>>> origin/doi_mat_khau
        'is_featured'
    ];
    public function menu()
    {
        return $this->hasOne(Menu::class, 'id', 'menu_id');
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/tim_kiem_user_admin
=======

    public function wishlists(){
        return $this->hasMany(Wishlist::class);
    }
}
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
=======
>>>>>>> origin/san_pham_noi_bat
=======
>>>>>>> origin/san_pham_mơi_nhat
=======
}
>>>>>>> origin/quan_ly_user
=======
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password
=======
>>>>>>> origin/doi_mat_khau
