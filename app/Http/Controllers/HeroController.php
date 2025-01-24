<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    /**
     * Tampilkan halaman index untuk hero.
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $hero = Hero::first();
        return view('admin.hero.index', compact('hero'));
    }

    /**
     * Menyimpan atau memperbarui data hero.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeOrUpdate(Request $request): RedirectResponse
    {
        // Validasi input
        $request->validate([
            'image'     => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
            'title'     => 'required|string|max:255',
            'subtitle'  => 'nullable|string|max:255',
        ]);

        // Cari hero pertama (jika ada)
        $hero = Hero::first();

        // Proses upload gambar
        $imagePath = $hero ? $hero->image : null;
        // dd($imagePath);
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($imagePath && Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }

            // Simpan gambar baru
            $imagePath = $request->file('image')->store('uploads/hero', 'public');
        }

        // Update atau buat data hero
        Hero::updateOrCreate(
            ['id' => $hero->id ?? null],
            [
                'image'     => $imagePath,
                'title'     => $request->input('title'),
                'subtitle'  => $request->input('subtitle'),
            ]
        );

        return redirect()->route('hero.index')->with('success', 'Hero section berhasil diperbarui!');
    }
}
