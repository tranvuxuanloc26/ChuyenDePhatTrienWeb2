<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'parent_id',
        'description',
        'content',
        'slug',
        'active',
        'thumb'
    ];

    public function products(){
        return $this->hasMany(Product::class, 'menu_id', 'id');
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> product_admin_detail

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

 
<<<<<<< HEAD
>>>>>>> menu_admin_detail
=======
>>>>>>> product_admin_detail
}