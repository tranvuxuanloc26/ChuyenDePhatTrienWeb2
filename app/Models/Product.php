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
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

     
  
     public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
