<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Hero;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first(); // Atau query sesuai kebutuhan
        $about = About::first(); // Atau query sesuai kebutuh
        return view('home', compact('hero', 'about'));  // Kirim data ke view
    }
}
