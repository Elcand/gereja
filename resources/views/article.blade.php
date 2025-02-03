@extends('components.layout')

@section('content')
    <div class="container py-14 py-md-14">
        <div class="swiper-container blog grid-view mb-4" data-margin="20" data-dots="true" data-items-xl="3" data-items-md="2"
            data-items-xs="1">
            <div class="swiper">
                <div class="swiper-slide">
                    <article style="margin-left: 15%;">
                        <div class="card shadow-lg" style="width: 90%;">
                            <div class="card-body p-6">
                                <h2 class="post-title h3 mt-1 mb-5 ">
                                    {{ $article->title }}
                                </h2>
                                <div class="post-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date">
                                            <i class="uil uil-calendar-alt"></i>
                                            <span>{{ $article->created_at->diffForHumans() }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <hr class="mt-4 mb-10 border-bottom">
                                <p>{{ $article->content }}</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
