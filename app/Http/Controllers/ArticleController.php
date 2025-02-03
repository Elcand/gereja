<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
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
        $categories = Category::all(); //kalo mau buat relasi kategori jan lupa ini!!!
        return view('admin.create.article', compact('categories'));
    }

    /**
     * Menyimpan artikel baru.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        $request->validate([
            'category_id' => 'required',
            'ayat'        => 'required|string',
            'title'       => 'required|string',
            'content'     => 'required|string',
        ]);

        // Menyimpan artikel ke database
        $article = new Article();
        $article->category_id = $request->category_id;  // Menyimpan kategori yang dipilih
        $article->ayat = $request->ayat;  // Menyimpan ayat
        $article->title = $request->title;  // Menyimpan judul
        $article->content = $request->content;  // Menyimpan konten
        $article->save();  // Menyimpan artikel ke database

        return redirect()->route('article.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Menampilkan detail artikel.
     *
     * @param  string  $id
     * @return View
     */
    public function show(string $category_id): View
    {
        $article = Article::where('category_id', $category_id)
            ->first();
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
            'category_id' => 'required',
            'ayat'        => 'required|string',
            'title'       => 'required|string',
            'content'     => 'required|string',
        ]);

        $article = Article::findOrFail($id);
        $article->update([
            'title'   => $request->title,
            'ayat'    => $request->ayat,
            'content' => $request->content,
        ]);

        return redirect()->route('article.index')->with(['success' => 'Data Berhasil Diubah!']);
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

        return redirect()->route('article.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    
}
