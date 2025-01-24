@extends('admin.layouts.layout')

@section('title', 'Home')


@section('content')
    <div class="container mt-8">
        <div class="row ps-3">
            <div class="col-md-12 mt-3">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h1 class="text-gray-900 text-2xl font-bold ps-4 mb-3 ">Kelola Hero Section
                        </h1>
                        <hr>
                        @if (session('success'))
                            <div class="alert alert-success mt-4 delay-200">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('hero.storeOrUpdate') }}" method="POST" enctype="multipart/form-data"
                            class="mt-6">

                            @csrf
                            <div class="mb-3">
                                <label for="image"
                                    class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Upload Gambar
                                </label>
                                <input type="file"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('image') is-invalid @enderror"
                                    id="image" name="image" accept="image/*">

                                @error('image')
                                    <div class="invalid-feedback mt-3 text-red-500 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror

                                @if (!empty($hero->image))
                                    <div class="mt-3">
                                        <p class="text-gray-700 dark:text-gray-300">Gambar Latar Saat Ini:</p>
                                        <!-- Tampilkan gambar dari database -->
                                        <img src="{{ asset('storage/' . $hero->image) }}" alt="Background Image"
                                            class="img-fluid rounded-lg border border-gray-300 dark:border-gray-600"
                                            style="max-height: 200px; object-fit: cover;">
                                    </div>
                                @endif

                            </div>

                            <div class="mb-3">
                                <label for="title"
                                    class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                                <input type="text"
                                    class="form-control @error('title') is-invalid @enderror border-gray-300 rounded"
                                    id="title" name="title" value="{{ old('title', $hero->title ?? '') }}"
                                    placeholder="Masukkan judul hero section">

                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="subtitle"
                                    class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                <input type="text"
                                    class="form-control @error('subtitle') is-invalid @enderror border-gray-300 rounded"
                                    id="subtitle" name="subtitle" value="{{ old('subtitle', $hero->subtitle ?? '') }}"
                                    placeholder="Masukkan deskripsi (opsional)">

                                @error('subtitle')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="text-center mb-4">
                                <button type="submit"
                                    class="btn bg-gray-900 btn-md btn-primary me-3 border-gray-900">SAVE</button>
                                <button type="reset"
                                    class="btn bg-red-700 btn-md btn-warning border-red-700">RESET</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
