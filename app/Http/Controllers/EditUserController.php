<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EditUserController extends Controller
{

    public function __invoke(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // $user->password = Hash::$request->input('password');
        $user->update();
        return redirect()->back()->with('status', 'User updated successfully!');
    }
}
