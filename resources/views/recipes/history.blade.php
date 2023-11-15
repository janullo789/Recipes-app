<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Przepisy - historia') }}
        </h2>
    </x-slot>

    <div>
        @livewire('recipes-history');
    </div>

</x-app-layout>
