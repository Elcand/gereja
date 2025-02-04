@extends('admin.layouts.layout')

@section('title', 'Map - Admin')

@section('content')
    <div class="container mt-8">
        <h1 class="text-gray-900 text-2xl font-bold mt-8 ps-4 mb-2">Create Location</h1>
        <div class="row ps-3">
            <div class="col-md-12 mt-3">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('maps.create') }}" class="btn btn-primary bg-gray-900 border-gray-900">Add
                            Location</a>
                        <table class="table table-bordered mt-5">
                            <thead>
                                <tr class="text-center text-gray-900">
                                    <th scope="col">Nama Gereja</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Latitude</th>
                                    <th scope="col">Longitude</th>
                                    <th scope="col" style="width: 20%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($maps as $map)
                                    <tr>
                                        <td>{{ $map->name }}</td>
                                        <td>{{ $map->address }}</td>
                                        <td>{{ $map->latitude }}</td>
                                        <td>{{ $map->longitude }}</td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('maps.destroy', $map->id) }}" method="POST"
                                                class="row w-15">
                                                <a href="{{ route('maps.show', $map->id) }}"
                                                    class="btn btn-sm btn-dark m-2">SHOW</a>
                                                <a href="{{ route('maps.edit', $map->id) }}"
                                                    class="btn btn-sm btn-primary m-2">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-sm btn-danger bg-red-500 m-2">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">Lokasi Gereja belum Ditambahkan.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
