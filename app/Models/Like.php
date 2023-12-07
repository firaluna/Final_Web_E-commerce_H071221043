<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
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