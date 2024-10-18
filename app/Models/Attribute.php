<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $table = 'attributes';

    protected $fillable = [
        'name',
        'value',
        'product_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
