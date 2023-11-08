<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Sklepy') }} - {{ __('Edycja sklepu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-4xl space-y-6 sm:px-6 lg:px-8">
            <div class="bg-white shadow-md sm:rounded-lg">
                <form method="POST" action="{{ route('shops.update', $shop->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="px-6 py-4">
                        <!-- Name -->
                        <div class="mb-4">
                            <x-input-label for="name" :value="__('Nazwa')"/>
                            <x-text-input id="name" class="mt-1 block w-full" type="text" name="name"
                                          :value="old('name', $shop->name)" required autofocus autocomplete="name"/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                        </div>

                        <!-- Category -->
                        <!-- Assuming the categories are static, if they are dynamic you would fetch them like the recipes example -->
                        <div class="my-4">
                            <x-input-label for="category" :value="__('Kategoria')"/>
                            <select id="category" name="category"
                                    class="my-1 block w-full rounded-md border border-gray-300 bg-gray-50 text-gray-900 shadow-sm p-2.5 focus:border-gray-500 focus:ring-gray-500 dark:placeholder-gray-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500">
                                <option value="" {{ $shop->category == '' ? 'selected' : '' }}>-</option>
                                <option
                                    value="supermarket" {{ $shop->category == 'supermarket' ? 'selected' : '' }}>{{ __('supermarket') }}</option>
                                <option
                                    value="piekarnia" {{ $shop->category == 'piekarnia' ? 'selected' : '' }}>{{ __('piekarnia') }}</option>
                                <option
                                    value="kiosk" {{ $shop->category == 'kiosk' ? 'selected' : '' }}>{{ __('kiosk') }}</option>
                                <option
                                    value="centrum handlowe" {{ $shop->category == 'centrum handlowe' ? 'selected' : '' }}>{{ __('centrum handlowe') }}</option>
                                <option
                                    value="ogólny" {{ $shop->category == 'ogólny' ? 'selected' : '' }}>{{ __('ogólny') }}</option>
                                <option
                                    value="wielobranżowy" {{ $shop->category == 'wielobranżowy' ? 'selected' : '' }}>{{ __('wielobranżowy') }}</option>
                                <option
                                    value="inny" {{ $shop->category == 'inny' ? 'selected' : '' }}>{{ __('inny') }}</option>
                            </select>
                            <x-input-error :messages="$errors->get('category')" class="mt-2"/>
                        </div>

                        <!-- Address -->
                        <div class="mb-4">
                            <x-input-label for="address" :value="__('Adres')"/>
                            <textarea id="address" name="address" rows="4"
                                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                                      required>{{ old('address', $shop->address) }}</textarea>
                            <x-input-error :messages="$errors->get('address')" class="mt-2"/>
                        </div>

                        <!-- Coordinates -->
                        <div class="mb-4 flex space-x-4">
                            <!-- Latitude -->
                            <div class="w-1/2">
                                <x-input-label for="latitude" :value="__('Szerokość geograficzna')"/>
                                <x-text-input id="latitude" class="mt-1 block w-full" type="text" name="latitude"
                                              :value="old('latitude', $shop->latitude)" required/>
                                <x-input-error :messages="$errors->get('latitude')" class="mt-2"/>
                            </div>
                            <!-- Longitude -->
                            <div class="w-1/2">
                                <x-input-label for="longitude" :value="__('Długość geograficzna')"/>
                                <x-text-input id="longitude" class="mt-1 block w-full" type="text" name="longitude"
                                              :value="old('longitude', $shop->longitude)" required/>
                                <x-input-error :messages="$errors->get('longitude')" class="mt-2"/>
                            </div>
                        </div>

                        <!-- Map -->
                        <div id="mapid" class="mb-4 h-96">
                            <!-- Here you would initialize the map with the shop's coordinates -->
                        </div>

                        <!-- Submit & Cancel -->
                        <div class="my-4 flex items-center justify-between">
                            <a href="{{ route('shops.index') }}">
                                <x-back-button>
                                    {{ __('Wróć') }}
                                </x-back-button>
                            </a>
                            <x-primary-button>
                                {{ __('Zapisz') }}
                            </x-primary-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <x-slot name="javaScript">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
                integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
                crossorigin=""></script>
        <script>
            var mapCenter = [{{ $shop->latitude }}, {{ $shop->longitude }}];
            var map = L.map('mapid').setView(mapCenter, {{ config('leaflet.detail_zoom_level') }});

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            var marker = L.marker(mapCenter).addTo(map);

            function updateMarker(lat, lng) {
                marker
                    .setLatLng([lat, lng])
                    .bindPopup("Your location :  " + marker.getLatLng().toString())
                    .openPopup();
                return false;
            };

            map.on('click', function (e) {
                let latitude = e.latlng.lat.toString().substring(0, 15);
                let longitude = e.latlng.lng.toString().substring(0, 15);
                $('#latitude').val(latitude);
                $('#longitude').val(longitude);
                updateMarker(latitude, longitude);
            });

            var updateMarkerByInputs = function () {
                return updateMarker($('#latitude').val(), $('#longitude').val());
            }
            $('#latitude').on('input', updateMarkerByInputs);
            $('#longitude').on('input', updateMarkerByInputs);
        </script>
    </x-slot>
</x-app-layout>
