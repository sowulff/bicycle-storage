<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use Illuminate\Http\Request;

class ListAllBicyclesController extends Controller
{
    public function __invoke(Request $request)
    {
        // $bicycles = Bicycle::select('name', 'price', 'image')->get();
        $bicycles = Bicycle::all();

        return view('bicycles', ['bicycles' => $bicycles]);
    }
}
