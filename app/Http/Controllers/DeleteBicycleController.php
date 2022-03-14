<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteBicycleController extends Controller
{
    public function __invoke(Bicycle $bicycle)
    {
        $bicycle->delete();
        return redirect('/bicycles/all')->with('deleted', 'Succesfully deleted');
    }
}
