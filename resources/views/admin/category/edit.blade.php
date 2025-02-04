@extends('admin.layouts.layout')

@section('title', 'Category - Update')

@section('content')
    <section id="snippet-1" class="wrapper pt-4 ps-8 pr-4">
        <h1 class="text-gray-900 text-2xl font-extrabold mt-5 mb-3">Create Church</h1>
        <div class="card">
            <form action="{{ route('category.update') }}" method="POST" enctype="multipart/form-data" class="ml-3 mr-3 mt-4">

                @csrf
                @method('PUT')

                <div class=" mb-4 sm:grid-cols-2">
                    <div class="gap-4 mb-4 sm:grid-cols-2">
                        <div class="mb-4">
                            <label for="last_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategory</label>
                            <input
                                class="@error('name') is-invalid @enderror block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="last_name" type="text" name="name" value="{{ old('name') }}"
                                placeholder="Input name">
                            @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="text-center mb-4">
                        <button type="submit" class="btn bg-gray-900 btn-md btn-primary me-3 border-gray-900">SAVE</button>
                        <button type="reset" class="btn bg-red-700 btn-md btn-warning border-red-700">RESET</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
