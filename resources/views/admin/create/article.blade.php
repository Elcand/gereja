@extends('admin.layouts.layout')


@section('content')
    <section id="snippet-1" class="wrapper pt-4 ps-8 pr-4">
        <h1 class="text-gray-900 text-2xl font-extrabold mt-5 mb-3">Create Article</h1>
        <div class="card">
            <form action="{{ route('article.store') }}" method="POST" class="ml-3 mr-3 mt-4">

                @csrf

                <div class=" grid gap-4 mb-4 sm:grid-cols-2 ">
                    <div class="relative w-82">
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

                    </div>

                    <div class="mb-4">
                        <label for="ayat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ayat
                            Renungan</label>
                        <input type="text" id="ayat" name="ayat"
                            class="@error('ayat') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" autocomplete="off" value="{{ old('ayat') }}" />

                        @error('ayat')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>
                <div class="mb-6">
                    <div class="mb-4">
                        <label for="title"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" id="title" name="title"
                            class="@error('title') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" autocomplete="off" value="{{ old('title') }}" />

                        @error('title')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="mb-4">
                        <label for="content"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                        <textarea type="text" id="content" name="content"
                            class="@error('title') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" autocomplete="off">{{ old('content') }}</textarea>
                        @error('content')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>
                <div class="text-center mb-4">
                    <button type="submit" class="btn bg-gray-900 border-gray-900 btn-md btn-primary me-3">SAVE</button>
                    <button type="reset" class="btn bg-red-700 border-red-700 btn-md btn-warning">RESET</button>
                </div>
            </form>
        </div>
    </section>
@endsection
