<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Sklepy') }}
        </h2>
    </x-slot>

    <div class="py-6 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                <div class="p-6 bg-white border-b border-gray-300">
                    <div id="mapid" class="h-128 my-6"></div>
                </div>
            </div>
        </div>
    </div>

    @section('custom_js')
{{--        @vite(['resources/js/recipes/show.js'])--}}


{{--    <x-slot name="javaScript">--}}
                <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
                <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
                        integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
                        crossorigin=""></script>
                <script>
                    console.log()
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

                    @can('isAdmin', auth()->user())
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
    @endsection
{{--    </x-slot>--}}
</x-app-layout>
