<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create(): View
    {
        $category = Category::all();
        // dd($category);
        return view('admin.category.create', compact('category'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|unique:categories',
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('category.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    public function show(Request $request, $slug): View
    {
        // Ambil data berdasarkan slug
        $category = Category::where('slug', $slug)->first();
        // dd($categories);
        $articles = $category->articles;
        // dd($articles);
        return view('admin.category.show', compact('category', 'articles'));
    }

    public function edit(string $slug): View
    {
        $category = Category::findOrFail($slug);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $slug): RedirectResponse
    {
        dd($request);
        $request->validate([
            'name' => 'required|unique:categories,name,',
        ]);

        $category = Category::findOrFail($slug);
        $category->update([
            'name'   => $request->name,
        ]);

        return redirect()->route('category.index')->with(['success' => 'Data Berhasil Diubah!']);
    }


    public function destroy(string $id): RedirectResponse
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
