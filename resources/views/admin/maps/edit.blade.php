@extends('admin.layouts.layout')

@section('content')
    <div class="container mt-15 ps-11 pe-8 mb-5">
        <h1 class="text-gray-900 text-2xl font-extrabold mt-5 mb-3">Edit Location</h1>
        <div class="row">
            <div class="card border-0 shadow-sm rounded">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">

                        <form action="{{ route('maps.update', $maps->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-2 gap-6">
                                <div class="form-group mb-3 col-span-1">
                                    <label class="font-weight-bold">Latitude</label>
                                    <input type="numeric"
                                        class="form-control @error('latitude') is-invalid @enderror rounded-md border-gray-200"
                                        name="latitude" value="{{ old('latitude', $maps->latitude) }}" placeholder="">

                                    <!-- error message untuk title -->
                                    @error('latitude')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3 col-span-1">
                                    <label class="font-weight-bold">Longtitude</label>
                                    <input class="form-control @error('longtitude') is-invalid @enderror" name="longtitude"
                                        placeholder="Input longtitude"
                                        value="{{ old('longtitude', $maps->longtitude) }}"></input>

                                    <!-- error message untuk description -->
                                    @error('longtitude')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center mt-8">
                                <button type="submit"
                                    class="btn btn-md btn-primary me-3 bg-gray-900 border-gray-900">UPDATE</button>
                                <button type="reset"
                                    class="btn btn-md btn-warning bg-yellow-400 border-yellow-400">RESET</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
