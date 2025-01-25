<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();  // Atau ambil data sesuai kebutuhan
        return view('home', compact('hero'));  // Kirim data ke view
    }
}
