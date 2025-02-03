@extends('admin.layouts.layout')

@section('title', 'Edit Data')

@section('content')
    <div class="container mt-15 ps-8 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('article.update', $article->id) }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Title</label>
                                <input type="text"
                                    class="form-control @error('title') is-invalid @enderror rounded-md border-gray-200"
                                    name="title" value="{{ old('title', $article->title) }}" placeholder="Input title">

                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Content</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5"
                                    placeholder="Input content">{{ old('content', $article->content) }}</textarea>

                                <!-- error message untuk description -->
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit"
                                class="btn btn-md btn-primary me-3 bg-gray-900 border-gray-900">UPDATE</button>
                            <button type="reset"
                                class="btn btn-md btn-warning bg-yellow-400 border-yellow-400">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
