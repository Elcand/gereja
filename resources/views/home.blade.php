@extends('components.layout')

@section('title', 'Gereja Immanuel')

@section('content')
    <section class="wrapper bg-dark">
        <div class=" swiper-fullscreen nav-dark" data-margin="0">
            <div class="swiper">
                <div>
                    @if ($hero && $hero->image)
                        <div class="swiper-slide bg-overlay bg-overlay-500 bg-dark bg-image"
                            data-image-src="{{ asset('storage/' . $hero->image) }}">
                        </div>
                    @else
                        <div class="swiper-slide bg-overlay bg-overlay-500 bg-dark bg-image"
                            data-image-src="{{ asset('assets/img/Gereja.jpeg') }}">
                        </div>
                    @endif
                </div>
            </div>
            <div class="swiper-static">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="row">
                        <div class="col-lg-8 mx-auto mt-18 text-center">
                            <h1 class="fs-25 text-uppercase ls-xl text-white mb-3">
                                Selamat Datang di</h1>
                            <h2 class="display-1 fs-55 text-white mb-0">
                                {{ $hero->title }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('about')

    @include('articles')

    @include('church')

    @include('maps')
@endsection
