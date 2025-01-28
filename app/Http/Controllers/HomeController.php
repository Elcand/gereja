<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Article;
use App\Models\Church;
use App\Models\Hero;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $about = About::first();
        $article = Article::first();
        $church = Church::first();
        return view('home', compact('hero', 'about', 'article', 'church'));  // Kirim data ke view
    }
}
