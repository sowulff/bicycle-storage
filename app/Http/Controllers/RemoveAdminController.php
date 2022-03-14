<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RemoveAdminController extends Controller
{
    public function __invoke(Request $request, User $user)
    {
        $user->update(['is_admin' => false]);
        $user->save();
        return back()->with('success', "$user->name is no longer a admin.");
    }
}
