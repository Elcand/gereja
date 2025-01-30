<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Article;
use App\Models\Church;
use App\Models\Hero;
use App\Models\Maps;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $about = About::first();
        $articles = Article::all();
        $churches = Church::all();
        $maps = Maps::all();
        return view('home', compact('hero', 'about', 'articles', 'churches', 'maps'));  // Kirim data ke view
    }
}
