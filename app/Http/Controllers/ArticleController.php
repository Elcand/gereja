<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * @return void
     */
    public function index(): View
    {
        $articles = Article::latest()->paginate(10);
        return view('admin.manage.article', compact('articles'));
    }


    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.create.article');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'         => 'required|min:5',
            'content'       => 'required|min:10',
        ]);

        Article::create([
            'title'         => $request->title,
            'content'       => $request->content,
        ]);

        return redirect()->route('article.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
