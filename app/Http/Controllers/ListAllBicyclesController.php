<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use Illuminate\Http\Request;

class ListAllBicyclesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // $bicycles = Bicycle::select('name', 'price', 'image')->get();
        $bicycles = Bicycle::all();

        return view('bicycles', ['bicycles' => $bicycles]);
    }
}
