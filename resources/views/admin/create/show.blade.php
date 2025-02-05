@extends('admin.layouts.layout')

@section('title', 'Article - Show')

@section('content')
    <div class="container mt-5 mb-5 ps-8">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3 class="text-2xl mb-6">{{ $article->title }}</h3>
                        <hr />
                        <code>
                            <p class="mt-5">{!! $article->content !!}</p>
                        </code>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
