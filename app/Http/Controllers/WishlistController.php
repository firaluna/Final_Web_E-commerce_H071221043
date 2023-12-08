<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Wishlist;
use App\Http\Controllers\Controller;
use App\Http\Controllers\WishlistController;

class WishlistController extends Controller
{
    public function wish(Request $request)
    {
        Wishlist::create([
            'user_id' => auth()->user()->id,
            'product_id' => $request->input('product_id')
        ]);

        return view('buyer.wish');
    }
}
