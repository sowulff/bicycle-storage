<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use Illuminate\Http\Request;

class EditBicycleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $id)
    {
        $bicycle = Bicycle::find($id);
        $bicycle->name = $request->input('name');
        $bicycle->image = $request->input('image');
        $bicycle->price = $request->input('price');
        $bicycle->quantity = $request->input('quantity');
        $bicycle->update();
        return redirect()->back()->with('status', 'Bike Updated Successfully');
    }
}
