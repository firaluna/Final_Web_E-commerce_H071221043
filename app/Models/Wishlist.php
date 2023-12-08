<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wishlist extends Model
{
    use HasFactory;

    protected $guarded =['id'];
    function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    function product(){
        return $this->belongsTo(Product::class, 'produk_id');
    }
}
