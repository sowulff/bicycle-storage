<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use App\Models\Wishlist;

class ListWishlist extends Controller
{
    public function __invoke()
    {
        $bicycles = Bicycle::all();
        $wishlist = Wishlist::all();

        return view('wishlist', ['bicycles' => $bicycles, 'wishlist' => $wishlist]);
    }
}
