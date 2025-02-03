@extends('components.layout')

@section('content')
    <div class=" py-14 py-md-14  bg-secondary-subtle text-secondary-emphasis">
        <div class="swiper-container blog grid-view mb-4" data-margin="20" data-dots="true" data-items-xl="3" data-items-md="2"
            data-items-xs="1">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="row" style="margin-left: 200px;">
                        <div class="col-lg-4 col-md-6">
                            <div class="card border-0 shadow-sm rounded">
                                <div class="card-body">
                                    @if ($church && $church->image)
                                        <img src="{{ asset('storage/' . $church->image) }}" class="rounded img-fluid"
                                            alt="Gambar Gereja">
                                    @else
                                        <div class="swiper-slide bg-overlay bg-overlay-500 bg-dark bg-image"
                                            data-image-src="{{ asset('assets/img/Gereja.jpeg') }}">
                                        </div>
                                    @endif

                                    @foreach ($map as $index => $map)
                                        <div id="map{{ $index }}" class="mt-10"
                                            style="height: 200px; border-radius: 12px; box-shadow: 5px;"></div>

                                        <script>
                                            var map = L.map('map{{ $index }}').setView([{{ $map->latitude }}, {{ $map->longitude }}], 15);

                                            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                                maxZoom: 18,
                                                attribution: '© OpenStreetMap'
                                            }).addTo(map);

                                            var marker = L.marker([{{ $map->latitude }}, {{ $map->longitude }}]).addTo(map)
                                                .bindPopup(
                                                    '<b>{{ $map->name }}</b><br>{{ $map->address }}<br><a href="https://www.google.com/maps?q={{ $map->latitude }},{{ $map->longitude }}" target="_blank">Open in Google Maps</a>'
                                                );

                                            marker.on('click', function() {
                                                var googleMapsUrl = 'https://www.google.com/maps?q=' + {{ $map->latitude }} + ',' +
                                                    {{ $map->longitude }};
                                                window.open(googleMapsUrl, '_blank');
                                            });
                                        </script>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-6">
                            <div class="card border-0 shadow-sm rounded">
                                <div class="card-body">
                                    <h1 class="mb-4 fs-35">{{ $church->name }}</h1>
                                    <p class="mb-4 fs-23">Nama Pendeta: {{ $church->pastor }}</p>
                                    <p class="mb-4 fs-23">Alamat Gereja: {{ $church->address }}</p>
                                    <p class="mb-4 fs-23">Kota: {{ $church->city }}</p>
                                    <p class="mb-4 fs-23">Negara: {{ $church->state }}</p>
                                    <p class="mb-4 fs-23">Kode Pos: {{ $church->postal_code }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
