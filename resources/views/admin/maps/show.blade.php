@extends('admin.layouts.layout')

@section('title', 'Map - Show')

@section('content')
    <div class="ps-12 pe-8">
        <div class="row my-10">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <div class="container">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="col-span-1">
                                <h1 class="text-2xl font-bold mb-6">Lokasi Gereja</h1>
                            </div>
                            <div class="col-span-1 mt-3">
                                <p class="text-right"><a href="{{ route('church.show', $map->id) }}"> Selengkapnya
                                        &Rightarrow;</a>
                                </p>
                            </div>
                        </div>
                        <div id="map" style="height: 500px; border-radius: 12px; box-shadow: 5px;"></div>
                        <script>
                            var map = L.map('map').setView([{{ $map->latitude }}, {{ $map->longitude }}], 25);

                            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                maxZoom: 18,
                                attribution: '© OpenStreetMap'
                            }).addTo(map);

                            L.marker([{{ $map->latitude }}, {{ $map->longitude }}]).addTo(map)
                                .bindPopup(
                                    '<b>{{ $map->name }}</b><br>{{ $map->address }}<br><a href="https://www.google.com/maps?q={{ $map->latitude }},{{ $map->longitude }}" target="_blank">Open in Google Maps</a>   '
                                );

                            marker.on('click', function() {
                                var googleMapsUrl = 'https://www.google.com/maps?q=' + {{ $map->latitude }} + ',' +
                                    {{ $map->longitude }};
                                window.open(googleMapsUrl, '_blank');
                            });
                        </script>
                    </div>
                    <div class="grid gap-4 mb-4 grid-cols-1">
                        <div class="card border-0 shadow-sm rounded">
                            <div class="card-body">
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="col-span-1">
                                        <p class="mb-4 mt-4 font-semibold">Nama Gereja:</p>
                                        <p>{{ $map->name }}</p>
                                        <hr class="mt-2">
                                    </div>
                                    <div class="col-span-1">
                                        <p class="mb-4 mt-4 font-semibold">Alamat:</p>
                                        <p>{{ $map->address }}</p>
                                        <hr class="mt-2">
                                    </div>
                                    <div class="col-span-1">
                                        <p class="mb-4 mt-4 font-semibold">Latitude:</p>
                                        <p>{{ $map->latitude }}</p>
                                        <hr class="mt-2">
                                    </div>
                                    <div class="col-span-1">
                                        <p class="mb-4 mt-4 font-semibold">Longitude:</p>
                                        <p>{{ $map->longitude }}</p>
                                        <hr class="mt-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
