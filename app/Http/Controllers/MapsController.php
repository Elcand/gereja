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
            'name'             => 'required',
            'address'          => 'required',
            'latitude'         => 'required|numeric',
            'longitude'        => 'required|numeric',
        ]);

        $maps = $request->all();
        $maps['latitude'] = round($maps['latitude'], 6);
        $maps['longitude'] = round($maps['longitude'], 6);

        Maps::create($request->all());
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
        // if ($request->hasName()) {
        //     $church = $request->hasName();
        // }
        $map = Maps::findOrFail($id);
        return view('admin.maps.show', compact('map'));
    }

    /**
     * edit
     *
     * @param  mixed
     * @return View
     */
    public function edit(string $id, Maps $maps): View
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
    public function update(Request $request, $id, Maps $maps): RedirectResponse
    {
        $request->validate([
            'name'             => 'required',
            'address'          => 'required',
            'latitude'         => 'required|numeric',
            'longitude'        => 'required|numeric',
        ]);

        $maps->update($request->all());
        $maps = Maps::findOrFail($id);
        $maps->name = $request->input('name');
        $maps->address = $request->input('address');
        $maps->latitude = $request->input('latitude');
        $maps->longitude = $request->input('longitude');
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
