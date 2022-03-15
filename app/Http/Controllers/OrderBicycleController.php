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
            return back()->with('fail', 'Opps you are ordering too many bicycles!');
        }
        $bicycle->quantity -= $request->input('quantity');
        $bicycle->update();

        return back();
    }
}
