<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use Illuminate\Http\Request;

class BuyBikeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Bicycle $bicycle)
    {
        //$bicycle = Bicycle::select('name', 'price', 'image', 'quantity')->where('id', '=', $bicycle->id)->get();
        $bicycle = Bicycle::all();

        return view('cart', ['bicycle' => $bicycle]);
    }
}
