<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MakeAdminController extends Controller
{
    public function __invoke(Request $request, User $user)
    {
        $user->update(['is_admin' => true]);
        $user->save();
        return redirect()->back();
    }
}
