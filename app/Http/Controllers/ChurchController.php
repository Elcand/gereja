<?php

namespace App\Http\Controllers;

use App\Models\Church;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ChurchController extends Controller
{
    /**
     * @return void
     */
    public function index(): View
    {
        $churches = Church::all();
        return view('admin.church.index', compact('churches'));
    }

    /**
     * create
     * @return View
     */
    public function create(): View
    {
        return view('admin.church.create');
    }


    /**
     * store
     * @param  mixed
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image'        => 'required|image|mimes:jpeg,png,jpg|max:5120',
            'name'         => 'required',
            'pastor'       => 'required',
            'address'      => 'required',
            'city'         => 'required',
            'state'        => 'required',
            'postal_code'  => 'required|numeric',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->storeAs('public/church', $image->hashName());
        } else {
            $imagePath = null;
        }

        Church::create([
            'image'        => $imagePath,
            'name'         => $request->name,
            'pastor'       => $request->pastor,
            'address'      => $request->address,
            'city'         => $request->city,
            'state'        => $request->state,
            'postal_code'  => $request->postal_code,
        ]);

        return redirect()->route('church.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     * @param  mixed
     * @return View
     */
    public function show(string $id): View
    {
        $church = Church::findOrFail($id);

        return view('admin.church.show', compact('church'));
    }


    /**
     * edit
     * @param  mixed
     * @return View
     */
    public function edit(string $id): View
    {

        $church = Church::findOrFail($id);

        return view('admin.church.edit', compact('church'));
    }

    /**
     * update
     * @param  mixed
     * @param  mixed
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {

        $request->validate([
            'image'        => 'required|image|mimes:jpeg,png,jpg|max:5120',
            'name'         => 'required',
            'pastor'       => 'required',
            'address'      => 'required',
            'city'         => 'required',
            'state'        => 'required',
            'postal_code'  => 'required|numeric',
        ]);

        $churches = Church::findOrFail($id);

        if ($request->hasFile('image')) {


            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagePath = $image->storeAs('public/church/', $image->hashName());
            } else {
                $imagePath = null;
            }

            $churches->update([
                'image'        => $imagePath,
                'name'         => $request->name,
                'pastor'       => $request->pastor,
                'address'      => $request->address,
                'city'         => $request->city,
                'state'        => $request->state,
                'postal_code'  => $request->postal_code,
            ]);
        } else {

            $churches->update([
                'name'         => $request->name,
                'pastor'       => $request->pastor,
                'address'      => $request->address,
                'city'         => $request->city,
                'state'        => $request->state,
                'postal_code'  => $request->postal_code,
            ]);
        }

        return redirect()->route('church.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     * @param mixed
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $church = Church::findOrFail($id);
        $church->delete();
        return redirect()->route('church.index')->with(['success' => 'Data Berhasil Dihapu!']);
    }
}
