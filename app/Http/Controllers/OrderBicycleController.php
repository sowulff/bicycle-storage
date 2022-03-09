<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use Illuminate\Http\Request;

class orderBicycleController extends Controller
{
    public function __invoke( Request $request, Bicycle $bicycle)
    {
        $quantity = $request->quantity;
        $bicycle->update(['quantity' => $quantity]);
        $bicycle->save();
        return back();
    }
}
