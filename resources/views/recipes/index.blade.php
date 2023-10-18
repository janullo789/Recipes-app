<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Przepisy') }}
        </h2>
    </x-slot>

    <div>
        @livewire('recipes-table');
    </div>

</x-app-layout>
