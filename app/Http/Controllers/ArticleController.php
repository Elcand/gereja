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
     * @param  mixed
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

    /**
     * show
     *
     * @param  mixed
     * @return View
     */
    public function show(string $id): View
    {
        $articles = Article::findOrFail($id);

        return view('admin.create.show', compact('articles'));
    }

    /**
     * edit
     *
     * @param  mixed
     * @return View
     */
    public function edit(string $id): View
    {

        $articles = Article::findOrFail($id);

        return view('admin.create.edit', compact('articles'));
    }
    /**
     * update
     *
     * @param  mixed
     * @param  mixed
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {

        $request->validate([
            'title'         => 'required|min:5',
            'content'       => 'required|min:10',
        ]);

        $articles = Article::findOrFail($id);
        $articles->title = $request->input('title');
        $articles->content = $request->input('content');
        $articles->save();

        return redirect()->route('article.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $articles = Article::findOrFail($id);

        $articles->delete();

        return redirect()->route('article.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
