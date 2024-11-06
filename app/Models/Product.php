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
=======
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
    ];
    public function menu()
     {
        return $this->hasOne(Menu::class, 'id', 'menu_id');
    }
<<<<<<< HEAD
}
=======
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
>>>>>>> origin/tim_kiem_user_admin
=======

    public function wishlists(){
        return $this->hasMany(Wishlist::class);
    }
}
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
