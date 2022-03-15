<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EditUserController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['nullable', 'string', 'min:8']
        ]);


        $user = User::find($id);
        $user->name = $data['name'];
        $user->email = $data['email'];
        if ($data['password'] != null) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->update();
        return redirect()->back()->with('status', 'User updated successfully!');
    }
}
