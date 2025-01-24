<div id="church">
    <div class="container py-14 py-md-14">
        <div class="row text-center">
            <h3 class="display-4 mb-9 text-uppercase font-bold">List Gereja
            </h3>
        </div>
        {{-- <div class="swiper-container blog grid-view mb-10" data-margin="30" data-dots="true" data-items-xl="3"
            data-items-md="2" data-items-xs="1">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">s
                        @forelse ($churches as $church)
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-6"><a
                                        href="{{ route('church.show', $church->id) }}   "> <img
                                            src="{{ asset('storage/' . $church->image) }}" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3"><a class="link-dark"
                                            href="#">{{ $church->name }}</a>
                                    </h2>
                                </div>
                            </article>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">Data Gereja belum Tersedia.</td>
                            </tr>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>


        <div class="card border-0 shadow-sm rounded">
            <div class="card-body">
                @forelse ($churches as $church)
                    <tr>
                        <td>{{ $church->name }}</td>
                        <td>{{ $church->pastor }}</td>
                        <td>{{ $church->address }}</td>
                        <td>{{ $church->city }}</td>
                        <td>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Data Gereja belum Tersedia.</td>
                    </tr>
                @endforelse
            </div>
        </div> --}}
    </div>
</div>
