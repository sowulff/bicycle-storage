<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use Illuminate\Http\Request;

class orderBicycleController extends Controller
{
    public function __invoke( Request $request, $id)
    {
        $bicycle = Bicycle::find($id);
        $bicycle->quantity = $request->input('quantity');
        $bicycle->update();

        return back();
    }
}
