<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-semibold leading-tight text-gray-800">
            {{ __('shop.detail') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white overflow-hidden shadow rounded-lg">
                            <div class="px-4 py-5 sm:p-6">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ __('shop.name') }}</td><td class="text-sm text-gray-500">{{ $shop->name }}</td></tr>
                                    <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ __('shop.address') }}</td><td class="text-sm text-gray-500">{{ $shop->address }}</td></tr>
                                    <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ __('shop.latitude') }}</td><td class="text-sm text-gray-500">{{ $shop->latitude }}</td></tr>
                                    <tr><td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ __('shop.longitude') }}</td><td class="text-sm text-gray-500">{{ $shop->longitude }}</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="bg-white overflow-hidden shadow rounded-lg">
                            <div class="px-4 py-5 sm:p-6">
                                @if ($shop->coordinate)
                                    <div id="mapid" class="h-96"></div>
                                @else
                                    <div class="text-sm text-gray-500">{{ __('shop.no_coordinate') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end space-x-2 mt-4">
                        @can('update', $shop)
                            <a href="{{ route('shops.edit', $shop) }}" class="px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white font-bold rounded-lg transition duration-300">{{ __('shop.edit') }}</a>
                        @endcan
                        <a href="{{ route('shops.index') }}" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold rounded-lg transition duration-300">{{ __('shop.back_to_index') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="javaScript">
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
                integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
                crossorigin=""></script>
        <script>
            var map = L.map('mapid').setView([{{ $shop->latitude }}, {{ $shop->longitude }}], {{ config('leaflet.detail_zoom_level') }});

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([{{ $shop->latitude }}, {{ $shop->longitude }}]).addTo(map)
                .bindPopup('{!! $shop->map_popup_content !!}');
        </script>
    </x-slot>
</x-app-layout>
