<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Maps;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MapsController extends Controller
{
    /**
     * @return void
     */
    public function index(): View
    {
        $maps = Maps::all();
        return view('admin.maps.index', compact('maps'));
    }

    /**
     * create
     * @return void
     */
    public function create(): View
    {
        return view('admin.maps.create');
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
            'latitude'         => 'required|numeric',
            'longtitude'       => 'required|numeric',
        ]);

        Maps::create([
            'latitude'         => $request->latitude,
            'longtitude'       => $request->longtitude,
        ]);

        return redirect()->route('maps.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed
     * @return View
     */
    public function show(string $id): View
    {
        $maps = Maps::findOrFail($id);

        return view('admin.maps.show', compact('maps'));
    }

    /**
     * edit
     *
     * @param  mixed
     * @return View
     */
    public function edit(string $id): View
    {

        $maps = Maps::findOrFail($id);

        return view('admin.maps.edit', compact('maps'));
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
            'latitude'         => 'required|numeric',
            'longtitude'       => 'required|numeric',
        ]);

        $maps = Maps::findOrFail($id);
        $maps->latitude = $request->input('latitude');
        $maps->longtitude = $request->input('longtitude');
        $maps->save();

        return redirect()->route('maps.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    /**
     * destroy
     * @param  mixed
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $maps = Maps::findOrFail($id);
        $maps->delete();
        return redirect()->route('maps.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
