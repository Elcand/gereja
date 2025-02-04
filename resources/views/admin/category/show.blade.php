@extends('admin.layouts.layout')

@section('title', 'Category - Show')

@section('content')
    <div class="container mt-5">
        <div class="row ps-3">
            <div class="col-md-12 mt-3">
                <div class="card-body mt-6 ml-6">
                    <h3 class="text-xl font-bold text-gray-900">Kategori: {{ $category->name }}</h3>
                </div>
                @foreach ($articles as $article)
                    <table class="table table-bordered mt-5">
                        <tr>
                            <td>
                                <article>
                                    <div class="container mb-5 ps-8">
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
                                </article>
                            </td>
                        </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
