<div id="articles">
    <div class="container py-14 py-md-14">
        <div class="row text-center">
            <h3 class="display-4 mb-5 text-uppercase font-bold">Article Gereja Immanuel
            </h3>
        </div>
        <div class="swiper-container blog grid-view mb-4" data-margin="20" data-dots="true" data-items-xl="3"
            data-items-md="2" data-items-xs="1">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach ($articles as $article)
                        <div class="swiper-slide">
                            <article>
                                <div class="card shadow-lg">
                                    <div class="card-body p-6">
                                        <div class="post-header">
                                            <div class="post-category mb-5">
                                                @if ($article->category_id)
                                                    <a href="/articles{{ $article->slug }}">
                                                        <span
                                                            class="text-primary-800 text-xs font-medium inline-flex items-center mr px-2.5 py-0.5 rounded                                                                       dark:bg-primary-200 dark:text-primary-800">
                                                            {{ $article->category->name }}
                                                        </span>
                                                    </a>
                                                @else
                                                    <span
                                                        class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                                                        Tanpa Kategori
                                                    </span>
                                                @endif
                                            </div>
                                            <h2 class="post-title h3 mt-1 mb-3">
                                                <a class="text-gray-900"
                                                    href="{{ route('user.article.show', $article->slug) }}">{{ $article->title }}</a>
                                            </h2>
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
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
