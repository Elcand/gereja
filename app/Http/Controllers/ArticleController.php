<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Menampilkan daftar artikel.
     *
     * @return View
     */
    public function index(): View
    {
        $articles = Article::latest()->paginate(10);
        return view('admin.manage.article', compact('articles'));
    }

    /**
     * Form untuk membuat artikel baru.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.create.articles');
    }

    /**
     * Menyimpan artikel baru.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'   => 'required|min:5',
            'content' => 'required|min:10',
        ]);

        Article::create([
            'title'   => $request->title,
            'slug'    => Str::slug($request->title, '-'), // Buat slug dari title
            'content' => $request->content,
        ]);

        return redirect()->route('article.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Menampilkan detail artikel.
     *
     * @param  string  $id
     * @return View
     */
    public function show(string $slug): View
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('admin.create.show', compact('article'));
    }

    /**
     * Form untuk mengedit artikel.
     *
     * @param  string  $id
     * @return View
     */
    public function edit(string $id): View
    {
        $article = Article::findOrFail($id);
        return view('admin.create.edit', compact('article'));
    }

    /**
     * Memperbarui artikel.
     *
     * @param  Request  $request
     * @param  string   $id
     * @return RedirectResponse
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'title'   => 'required|min:5',
            'content' => 'required|min:10',
        ]);

        $article = Article::findOrFail($id);
        $article->update([
            'title'   => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('articles.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Menghapus artikel.
     *
     * @param  string  $id
     * @return RedirectResponse
     */
    public function destroy(string $id): RedirectResponse
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
