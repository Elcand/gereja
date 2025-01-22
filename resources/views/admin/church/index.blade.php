@extends('admin.layouts.layout')

@section('title', 'Church')


@section('content')
    <div class="container mt-5">
        <div class="row ps-3">
            <div class="col-md-12 mt-3">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('church.create') }}" class="btn btn-primary bg-gray-900 border-gray-900">Add
                            church</a>
                        <table class="table table-bordered mt-5">
                            <thead>
                                <tr class="text-center text-gray-900">
                                    <th scope="col">Nama Gereja</th>
                                    <th scope="col">Nama Pendeta</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Kota</th>
                                    <th scope="col" style="width: 20%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($churches as $church)
                                    <tr>
                                        <td>{{ $church->name }}</td>
                                        <td>{{ $church->pastor }}</td>
                                        <td>{{ $church->address }}</td>
                                        <td>{{ $church->city }}</td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('church.destroy', $church->id) }}" method="POST"
                                                class="row w-15">
                                                <a href="{{ route('church.show', $church->id) }}"
                                                    class="btn btn-sm btn-dark m-2">SHOW</a>
                                                <a href="{{ route('church.edit', $church->id) }}"
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
                                        <td colspan="3" class="text-center">Data Gereja belum Tersedia.</td>
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
