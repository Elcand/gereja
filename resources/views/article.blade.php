<div class="container py-14 py-md-14">
    <div class="swiper-container blog grid-view mb-4" data-margin="20" data-dots="true" data-items-xl="3" data-items-md="2"
        data-items-xs="1">
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach ($articles as $article)
                    <div class="swiper-slide">
                        <article>
                            <div class="card shadow-lg">
                                <div class="card-body p-6">
                                    <h2 class="post-title h3 mt-1 mb-3">
                                        {{ $article->title }}
                                    </h2>
                                    <hr>
                                    <p>{{ $article->content }}</p>
                                </div>
                                <div class="post-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date">
                                            <i class="uil uil-calendar-alt"></i>
                                            <span>{{ $article->created_at->diffForHumans() }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
