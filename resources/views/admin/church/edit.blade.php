@extends('admin.layouts.layout')

@section('content')
    <section id="snippet-1" class="wrapper pt-4 ps-8 pr-4">
        <h1 class="text-gray-900 text-2xl font-extrabold mt-5 mb-3">Create Church</h1>
        <div class="card">
            <form action="{{ route('church.update', $church->id) }}" method="POST" enctype="multipart/form-data"
                class="ml-3 mr-3 mt-4">

                @csrf
                @method('PUT')

                <div class=" grid gap-4 mb-4 sm:grid-cols-2">
                    <div class="mb-4">

                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload
                            Image</label>
                        <input
                            class="@error('image') is-invalid @enderror block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="last_name" type="file" name="image" value="{{ old('image') }}"
                            placeholder="Input Image">
                        @error('image')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="last_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" id="last_name" name="name"
                            class="@error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Input name church" autocomplete="off" value="{{ old('name') }}" />

                        @error('name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="mb-4">
                        <label for="last_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pastor</label>
                        <input type="text" id="last_name" name="pastor"
                            class="@error('pastor') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Input pastor name" autocomplete="off" value=" {{ old('pastor') }}"></input>
                        @error('pastor')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="last_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <input type="text" id="last_name" name="address"
                            class="@error('address') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="input address" autocomplete="off" value=" {{ old('address') }}"></input>
                        @error('address')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="last_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                        <input type="text" id="last_name" name="city"
                            class="@error('city') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Input city" autocomplete="off" value="{{ old('city') }}"></input>
                        @error('city')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="last_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">State</label>
                        <input type="text" id="last_name" name="state"
                            class="@error('state') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Input state" autocomplete="off" value="{{ old('state') }}"></input>
                        @error('state')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Postal
                            Code</label>
                        <input type="text" id="last_name" name="postal_code"
                            class="@error('postal_code') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Input postal code" autocomplete="off" value="{{ old('postal_code') }}"></input>
                        @error('postal_code')
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
