<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class OrderBicycleController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $bicycle = Bicycle::find($id);
        if ($request->input('quantity') > $bicycle->quantity) {
            return back()->withErrors(['invalidQuantity'=>'Opps you are ordering too many bicycls!']);
        }
        $bicycle->quantity -= $request->input('quantity');
        $bicycle->update();

        return back();
    }
}
