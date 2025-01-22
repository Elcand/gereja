@extends('admin.layouts.layout')

@section('content')
    <section id="snippet-1" class="wrapper pt-4 ps-8 pr-4">
        <h1 class="text-gray-900 text-2xl font-extrabold mt-5 mb-3">Create Maps</h1>
        <div class="card">
            <form action="{{ route('maps.store') }}" method="POST" class="ml-3 mr-3 mt-4">

                @csrf

                <div class="mb-6 ">
                    <div class="mb-4">
                        <label for="last_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Latitude</label>
                        <input type="numeric" id="last_name" name="latitude"
                            class="@error('latitude') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" autocomplete="off" value="{{ old('latitude') }}" />

                        @error('latitude')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="mb-4">
                        <label for="last_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Longtitude</label>
                        <input type="numeric" id="last_name" name="longtitude"
                            class="@error('longtitude') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" autocomplete="off" value="{{ old('longtitude') }}"></input>
                        @error('longtitude')
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
