<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Ingredients') }}
        </h2>
    </x-slot>

    <div>
        @livewire('ingredients-table')
    </div>

{{--    <input type="hidden" id="deleteUrl" value="{{url('ingredients')}}/"/>--}}
{{--    <input type="hidden" id="editUrl" value="{{url('ingredients/edit')}}/"/>--}}
</x-app-layout>
<x-slot name="jsFiles">
{{--    <script src="{{ asset("js/ingredients/index.js") }}"></script>--}}
</x-slot>
