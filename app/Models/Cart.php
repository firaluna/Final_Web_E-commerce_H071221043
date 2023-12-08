<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'product_id',
        'quantity',
    ];

    protected $attributes = [
        'quantity' => 0,
        'product_id' => 0,
    ];
}
