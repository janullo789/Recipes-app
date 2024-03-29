<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Sklepy') }} - {{ __('Tworzenie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-4xl space-y-6 sm:px-6 lg:px-8">
            <div class="bg-white shadow-md sm:rounded-lg">
                <form method="POST" action="{{ route('shops.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="px-6 py-4">
                        <!-- Name -->
                        <div class="mb-4">
                            <x-input-label for="name" :value="__('Nazwa')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Category -->
                        <div class="my-4">
                            <x-input-label for="category" :value="__('Kategoria')"/>
                            <select id="category" name="category"
                                    class="bg-gray-50 shadow-sm border my-1 border-gray-300 text-gray-900 rounded-md focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected>-</option>
                                <option value="supermarket">{{ __('supermarket') }}</option>
                                <option value="piekarnia">{{ __('piekarnia') }}</option>
                                <option value="kiosk">{{ __('kiosk') }}</option>
                                <option value="centrum handlowe">{{ __('centrum handlowe') }}</option>
                                <option value="ogólny">{{ __('ogólny') }}</option>
                                <option value="wielobranżowy">{{ __('wielobranżowy') }}</option>
                                <option value="inny">{{ __('inny') }}</option>
                            </select>
                            <x-input-error :messages="$errors->get('category')" class="mt-2"/>
                        </div>

                        <!-- Address -->
                        <div class="mb-4">
                            <x-input-label for="address" :value="__('Adres')" />
                            <textarea id="address" name="address" rows="4" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>{{ old('address') }}</textarea>
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>

                        <!-- Coordinates -->
                        <div class="flex space-x-4 mb-4">
                            <div class="w-1/2">
                                <x-input-label for="latitude" :value="__('Szerokość geograficzna')" />
                                <x-text-input id="latitude" class="block mt-1 w-full" type="text" name="latitude" :value="old('latitude', request('latitude'))" required />
                                <x-input-error :messages="$errors->get('latitude')" class="mt-2" />
                            </div>
                            <div class="w-1/2">
                                <x-input-label for="longitude" :value="__('Długość geograficzna')" />
                                <x-text-input id="longitude" class="block mt-1 w-full" type="text" name="longitude" :value="old('longitude', request('longitude'))" required />
                                <x-input-error :messages="$errors->get('longitude')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Map -->
                        <div id="mapid" class="h-96 mb-4"
                             data-map-center-latitude="{{ request('latitude', config('leaflet.map_center_latitude')) }}"
                             data-map-center-longitude="{{ request('longitude', config('leaflet.map_center_longitude')) }}"
                             data-zoom-level="{{ config('leaflet.zoom_level') }}"></div>

                        <!-- Submit & Cancel -->
                        <div class="flex items-center justify-between my-4">
                            <a href="{{ route('shops.index') }}">
                                <x-back-button>
                                    {{ __('Wróć') }}
                                </x-back-button>
                            </a>
                            <x-primary-button>
                                {{ __('Dodaj') }}
                            </x-primary-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @section('custom_js')
        @vite(['resources/js/shops/form.js'])
    @endsection
</x-app-layout>
