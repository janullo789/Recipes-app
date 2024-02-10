<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Historia') }}
        </h2>
    </x-slot>

    <div>
        @livewire('recipes-history')
    </div>

    @section('custom_js')
        @vite(['resources/js/recipes/history.js'])
    @endsection

</x-app-layout>
