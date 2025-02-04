@extends('admin.layouts.layout')

@section('title', 'Map - Create')

@section('content')
    <section id="snippet-1" class="wrapper pt-8 ps-8 pr-4">
        <h1 class="text-gray-900 text-2xl font-extrabold mt-5 mb-3">Create Maps</h1>
        <div class="card">
            <form action="{{ route('maps.store') }}" method="POST" class="ml-3 mr-3 mt-4">

                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Gereja</label>
                        <input type="text" id="last_name" name="name"
                            class="@error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" autocomplete="off" value="{{ old('name') }}" />
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="address"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <input type="text" id="address" name="address"
                            class="@error('address') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" autocomplete="off" value="{{ old('address') }}" />
                        @error('address')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="latitude"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Latitude</label>
                        <input type="text" id="latitude" name="latitude"
                            class="@error('latitude') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" autocomplete="off" value="{{ old('latitude') }}" />
                        @error('latitude')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="longitude"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Longitude</label>
                        <input type="text" id="longitude" name="longitude"
                            class="@error('longitude') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" autocomplete="off" value="{{ old('longitude') }}" />
                        @error('longitude')
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
            </form>
        </div>
    </section>
@endsection
