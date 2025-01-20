@extends('admin.layouts.layout')


@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>{{ $article->title }}</h3>
                        <hr />
                        <code>
                            <p>{!! $article->content !!}</p>
                        </code>
                        <hr />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
