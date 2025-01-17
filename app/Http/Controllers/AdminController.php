<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControler extends Controller
{
    public function admin()
    {
        return view('admin\login');
    }
}
