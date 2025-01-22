<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\View\View;
// use App\Models\About;
// use Illuminate\Http\RedirectResponse;

// class AboutController extends Controller
// {
//     public function index(): View
//     {
//         $abouts = About::latest()->paginate(10);
//         return view('about', compact('abouts'));
//     }    

//     /**
//      * store
//      * @param mixed
//      * @return RedirectResponse
//      */
//     public function store(Request $request): RedirectResponse
//     {
//         $request->validate([
//             'image'             => 'image|mimes:jpeg,jpg,png|max:5120',
//             'title'             => 'required|min:5',
//             'description1'       => 'required|min:10',
//             'description2'       => 'required|min:10',
//         ]);

//         if ($request->hasFile('image')) {
//             $image = $request->file('image');
//             $imagePath = $image->storeAs('public/abouts', $image->hashName());
//         } else {
//             $imagePath = null;
//         }

//         About::create([
//             'image'         => $imagePath,
//             'title'         => $request->title,
//             'description1'   => $request->description1,
//             'description2'   => $request->description2,

//         ]);

//         return redirect()->route('about')->with(['success' => 'Data Berhasil Disimpan!']);
//     }
// }
