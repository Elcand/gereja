{{-- tampilannya tabel tapi ada fitur filternya --}}

@extends('admin.layouts.layout')

@section('title', 'Category - Admin')

@section('content')
    <div class="container mt-5">
        <div class="row ps-3">
            <div class="col-md-12 mt-3">
                <div class="row text-center">
                    <h3 class="display-4 mb-5  font-bold">Create New Category
                    </h3>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        {{-- <div class="grid gap-4 mb-4 sm:grid-cols-2"> --}}
                        <div class="w-auto">
                            <a href="{{ route('category.create') }}" class="btn btn-primary bg-gray-900 border-gray-900">Add
                                Category</a>
                        </div>
                        {{-- <div class="w-auto text-right">
                                <label for="category_id"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                            <select name="category_id"
                                class="block w-full p-2.5 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                                <option disabled {{ old('category_id') ? '' : 'selected' }}>Pilih Kategori</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div> --}}
                        {{-- </div> --}}
                        <table class="table table-bordered mt-5">
                            <thead>
                                <tr class="text-center text-gray-900">
                                    <th scope="col">Kategori</th>
                                    <th scope="col" style="width: 20%;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('category.destroy', $category->id) }}" method="POST"
                                                class="row w-15">
                                                <a href="{{ route('category.show', $category->slug) }}"
                                                    class="btn btn-sm btn-dark m-2">SHOW</a>
                                                <a href="{{ route('category.edit', $category->slug) }}"
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
                                        <td colspan="2" class="text-center">Data kategori tidak tersedia</td>
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
