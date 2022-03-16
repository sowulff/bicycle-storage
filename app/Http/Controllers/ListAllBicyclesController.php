<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListAllBicyclesController extends Controller
{
    public function __invoke(Request $request)
    {

        $bicycles = Bicycle::all();
        $wishlist = Wishlist::all();
        $user = Auth::user();

        return view('bicycles', ['bicycles' => $bicycles, 'wishlist' => $wishlist, 'user' => $user]);
    }
}
