<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\About;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;

class AboutController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $about = About::first();
        return view('admin.about.index', compact('about'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function aboutPage(): View
    {
        $about = About::first(); // Mengambil data pertama dari tabel About
        // @dd($about);
        return view('about', compact('about')); // Mengirimkan data ke view
    }


    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeOrUpdate(Request $request): RedirectResponse
    {
        // Validasi input
        $request->validate([
            'image'         => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
            'title'         => 'required|',
            'description'   => 'nullable|',
            'content'       => 'nullable|',
        ]);

        $about = About::first();
        // dd($about);

        $imagePath = $about ? $about->image : null;
        // dd($imagePath);
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($imagePath && Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }

            // Simpan gambar baru
            $imagePath = $request->file('image')->store('up/about', 'public');
        }

        // Update atau buat data about
        About::updateOrCreate(
            ['id' => $about->id ?? null],
            [
                'image'         => $imagePath,
                'title'         => $request->input('title'),
                'description'   => $request->input('description'),
                'content'       => $request->input('content'),
            ]
        );

        return redirect()->route('about.index')->with('success', 'about section berhasil diperbarui!');
    }
}
