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
                    <div id="mapid" class="h-128 my-6"
                         data-map-center-latitude="{{ config('leaflet.map_center_latitude') }}"
                         data-map-center-longitude="{{ config('leaflet.map_center_longitude') }}"
                         data-zoom-level="{{ config('leaflet.zoom_level') }}"
                         data-base-url="{{ url('/') }}"
                         data-shops-index-route="{{ route('api.shops.index') }}"
                         @can('isAdmin', auth()->user())
                             data-is-admin="true"
                         data-shop-create-route="{{ route('shops.create') }}"
                        @endcan
                    ></div>

                </div>
            </div>
        </div>
    </div>

    @section('custom_js')
        @vite(['resources/js/shops/map.js'])
    @endsection
</x-app-layout>
