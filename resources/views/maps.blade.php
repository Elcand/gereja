<div id="maps">
    <div class="row text-center my-10">
        <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
            <h3 class="fs-35 text-uppercase my-5">Lokasi gereja</h3>
            <div class="map-container content-center rounded-lg border border-gray shadow-md">
                @foreach ($maps as $map)
                    <div style="height: 500px; border-radius: 12px; box-shadow: 5px;"></div>
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
                @endforeach
            </div>
        </div>
    </div>
</div>
