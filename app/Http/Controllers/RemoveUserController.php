<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RemoveUserController extends Controller
{
    public function __invoke(Request $request, User $user)
    {
        $user->delete();
        return redirect()->back();
    }
}
