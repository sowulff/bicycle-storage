<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function __invoke(Request $request)
    {
        $users = User::orderBy('is_admin', 'desc')->orderBy('name', 'asc')->get();
        return view('admin/adminPanel', ['users' => $users]);
    }
}
