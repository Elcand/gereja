<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index()
    {
        $users = User::all();
        // dd($users);
        return view('admin.dashboard', compact('users'));
    }
}
