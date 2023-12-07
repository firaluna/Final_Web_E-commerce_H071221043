<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'product_id',
        'quantity',
        // 'price',
        // other fillable attributes...
    ];

    protected $attributes = [
        'quantity' => 0,
        'price' => 0.00,
        'product_id' => 0,
        // other default attributes...
    ];
}
