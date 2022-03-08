<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use Illuminate\Http\Request;

class buyBikeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $id = $request->input('bicycle-id');
        $bicycle = Bicycle::select('name', 'price', 'image', 'quantity')->where('id', '=', $id)->get();
        //$bicycle = Bicycle::all()->where('id');

        return view('cart', ['bicycle' => $bicycle]);
    }
}
