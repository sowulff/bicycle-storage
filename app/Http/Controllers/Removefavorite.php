<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use App\Models\Wishlist;

class Removefavorite extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Wishlist $wishlist)
    {
        $wishlist->delete();
        return back();
    }
}
