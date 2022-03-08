<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RemoveUserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, User $user)
    {
        $user->delete();
        return redirect()->back();
    }
}
