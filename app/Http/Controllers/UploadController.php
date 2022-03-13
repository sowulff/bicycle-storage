<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UploadController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:3',
            'image' => 'url',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
        ]);


        $bicycle = new Bicycle();
        $bicycle->name = $request->input('name');
        $bicycle->image = $request->input('image');
        $bicycle->price = $request->input('price');
        $bicycle->quantity = $request->input('quantity');
        $bicycle->save();

        // return back();
        return redirect('bicycles/all');
    }
}
