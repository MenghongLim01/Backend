<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'jewelryType',
        'category',
        'description',
        'price',
        'image',
        'gender',
        'merchantID',
        'status'
    ];

    // public function cartItems()
    // {
    //     return $this->hasMany(CartItem::class);
    // }
}
