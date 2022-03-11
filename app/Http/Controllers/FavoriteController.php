<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use App\Models\WishList;
use Illuminate\Support\Facades\Auth;

class favoriteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Bicycle $bicycle)
    {
        $wishlist = new Wishlist();
        $wishlist->bicycle_id = $bicycle->id;
        $wishlist->user_id = Auth::id();

        if ($wishlist->favorite) {
            $wishlist->favorite = false;
            $wishlist->update();
        } else {
            $wishlist->favorite = true;
            $wishlist->save();
        }



        return back();
    }
}
