@extends('admin.layouts.layout')

@section('title', 'Article - Admin')

@section('content')
    <div class="container mt-5">
        <div class="row ps-3">
            <div class="col-md-12 mt-3">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('article.create') }}" class="btn btn-primary bg-gray-900 border-gray-900">Add
                            article</a>
                        <table class="table table-bordered mt-5">
                            <thead>
                                <tr class="text-center text-gray-900">
                                    <th scope="col">Title</th>
                                    <th scope="col">Content</th>
                                    <th scope="col" style="width: 20%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($articles as $article)
                                    <tr>
                                        <td>{{ $article->title }}</td>
                                        <td>{{ $article->content }}</td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('article.destroy', $article->id) }}" method="POST"
                                                class="row w-15">
                                                <a href="{{ route('article.show', $article->id) }}"
                                                    class="btn btn-sm btn-dark m-2">SHOW</a>
                                                <a href="{{ route('article.edit', $article->id) }}"
                                                    class="btn btn-sm btn-primary m-2">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-sm btn-danger bg-red-500 m-2">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">Data articles belum Tersedia.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $articles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
