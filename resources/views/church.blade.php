<div id="church">
    <div class="container py-14 py-md-14">
        <div class="row text-center">
            <h3 class="display-4 mb-9 text-uppercase font-bold">List Gereja
            </h3>
        </div>
        <div class="swiper-container blog grid-view mb-10" data-margin="30" data-dots="true" data-items-xl="3"
            data-items-md="2" data-items-xs="1">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @forelse ($churches as $church)
                        <div class="swiper-slide">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded"
                                    style="max-height: 400px; width: auto;"><a
                                        href="{{ route('church.more', $church->id) }}"> <img
                                            src="{{ asset('storage/' . $church->image) }}" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-2 mt-4"><a class="link-dark"
                                            href="#">{{ $church->name }}</a>
                                    </h2>
                                    <p><a class="link-dark" href="#">{{ $church->address }}</a>
                                    </p>
                                </div>
                            </article>
                        </div>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">Data Gereja belum Tersedia.</td>
                        </tr>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</div>
