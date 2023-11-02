<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Sklepy') }}
        </h2>
    </x-slot>

    <div class="p-6 bg-white shadow rounded-lg">
        <div id="mapid" class="h-96"></div>  <!-- Zaktualizowano -->
    </div>

{{--    @push('styles')--}}
{{--        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"--}}
{{--              integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="--}}
{{--              crossorigin=""/>--}}
{{--    @endpush--}}

    <x-slot name="javaScript">
                <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
                <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
                        integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
                        crossorigin=""></script>
                <script>
                    var map = L.map('mapid').setView([{{ config('leaflet.map_center_latitude') }}, {{ config('leaflet.map_center_longitude') }}], {{ config('leaflet.zoom_level') }});
                    var baseUrl = "{{ url('/') }}";

                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                    }).addTo(map);

                    axios.get('{{ route('api.shops.index') }}')
                        .then(function (response) {
                            L.geoJSON(response.data, {
                                pointToLayer: function(geoJsonPoint, latlng) {
                                    return L.marker(latlng);
                                }
                            })
                                .bindPopup(function (layer) {
                                    if (layer.feature && layer.feature.properties && layer.feature.properties.map_popup_content) {
                                        return String(layer.feature.properties.map_popup_content);
                                    }
                                    return 'Brak informacji';
                                }).addTo(map);
                        })
                        .catch(function (error) {
                            console.log(error);
                        });

                    @can('create', new App\Models\Shop)
                    var theMarker;

                    map.on('click', function(e) {
                        let latitude = e.latlng.lat.toString().substring(0, 15);
                        let longitude = e.latlng.lng.toString().substring(0, 15);

                        if (theMarker !== undefined) {
                            map.removeLayer(theMarker);
                        }

                        var popupContent = "Your location : " + latitude + ", " + longitude + ".";
                        popupContent += '<br><a href="{{ route('shops.create') }}?latitude=' + latitude + '&longitude=' + longitude + '">Add new shop here</a>';

                        theMarker = L.marker([latitude, longitude]).addTo(map);
                        theMarker.bindPopup(popupContent)
                            .openPopup();
                    });
                    @endcan
                </script>
    </x-slot>
</x-app-layout>
