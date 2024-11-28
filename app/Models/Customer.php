<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;


    protected $fillable = [
       'name',
       'phone',
       'address',
       'email',
       'content',
       'user_id',
    ];

    public function carts(){
        return $this->hasMany(Cart::class, 'customer_id', 'id');
    }
  	
    public function user(){
        return $this->belongsTo(User::class);
  
    }
    public function calculateTotalPrice()
    {
        $total = 0;
        foreach ($this->carts as $cart) {
            $total += $cart->product->price_sale;
        }
        return $total;
    }
}
