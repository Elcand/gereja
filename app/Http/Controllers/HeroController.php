<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function store(Request $request)
    {
        $hero = new Hero();
        $hero->image = $request->file('image')->store('image');
        $hero->welcome_word = $request->input('welcome_word');
        $hero->name_church = $request->input('name_church');
        $hero->save();

        return redirect()->route('dashboard.home')->with('success', 'Data Berhasil di Simpan!');
    }

    public function hero()
    {
        return view('admin.manage.home');
    }
}
