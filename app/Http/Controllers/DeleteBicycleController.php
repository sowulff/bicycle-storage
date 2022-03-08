<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteBicycleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Bicycle $bicycle)
    {
        $bicycle->delete();
        return redirect()->back();
    }
}
