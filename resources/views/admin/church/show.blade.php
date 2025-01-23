@extends('admin.layouts.layout')


@section('content')
    <div class="container mt-10 mb-5 ps-8">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('storage/' . $church->image) }}" class="rounded" style="width: 400px; height:auto;">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3 class="mb-4 text-2xl font-bold">{{ $church->name }}</h3>
                        <p class="mb-4 mt-4">Nama Pendeta : {{ $church->pastor }}</p>
                        <hr>
                        <p class="mb-4 mt-4">Alamat Gereja : {{ $church->address }}</p>
                        <hr />
                        <p class="mb-4 mt-4">Kota : {{ $church->city }}</p>
                        <hr />
                        <p class="mb-4 mt-4">Negara : {{ $church->state }}</p>
                        <hr />
                        <p class="mb-4 mt-4">Kode Pos : {{ $church->postal_code }}</p>
                    </div>
                    <a href="{{ route('maps.show', $church->id) }}" class="text-right m-6">Lihat Peta &Rightarrow;</a>
                </div>
            </div>
        </div>
    </div>
@endsection
