<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use Illuminate\Http\Request;

class orderBicycleController extends Controller
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
        $quantity = $request->input('quantity');

        Bicycle::where('id', '=', $id)->quantity = $quantity;

        return back();
    }
}
