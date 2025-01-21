<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\About;
use Illuminate\Http\RedirectResponse;

class AboutController extends Controller
{
    public function index(): View
    {
        $abouts = About::latest()->paginate(10);
        return view('admin.about.index', compact('abouts'));
    }


    /**
     * create
     * @return View
     */
    public function create(): View
    {
        return view('admin.about.create');
    }

    /**
     * store
     * @param mixed
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'         => 'required|min:5',
            'content'       => 'required|min:10',
        ]);

        About::create([
            'title'         => $request->title,
            'content'       => $request->content,
        ]);

        return redirect()->route('admin.about.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
