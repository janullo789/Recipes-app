<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-indigo-700 leading-tight">
            {{ __('Recipes') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                <div class="p-6 bg-white border-b border-gray-300">
                    <livewire:recipe-list />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-bold text-2xl text-indigo-700 leading-tight">--}}
{{--            {{ __('Recipes') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12 bg-gray-100">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-lg rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-300">--}}
{{--                    <!-- Grid Container -->--}}
{{--                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">--}}
{{--                        @foreach($recipes as $recipe)--}}
{{--                            <!-- Recipe Card -->--}}
{{--                            <a href="{{ route('recipes.show', $recipe->id) }}" class="block hover:no-underline">--}}
{{--                                <div class="flex flex-col rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">--}}
{{--                                    <div class="flex-shrink-0">--}}
{{--                                        <img class="h-48 w-full object-cover" src="{{ asset('storage/' . $recipe->image_path) }}" alt="{{ $recipe->name }}">--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">--}}
{{--                                        <div class="flex-1">--}}
{{--                                            @if (!empty($recipe->diet))--}}
{{--                                                <p class="text-sm font-medium text-indigo-700">--}}
{{--                                                    {{ $recipe->diet }}--}}
{{--                                                </p>--}}
{{--                                            @else--}}
{{--                                                <p class="text-sm font-medium text-transparent">--}}
{{--                                                    Placeholder--}}
{{--                                                </p>--}}
{{--                                            @endif--}}
{{--                                            <div class="block mt-2">--}}
{{--                                                <p class="text-xl font-bold text-gray-900">--}}
{{--                                                    {{ $recipe->name }}--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <p class="mt-3 text-base text-gray-600">--}}
{{--                                                {{ __('Meal preparation time') }}: {{ $recipe->time }}--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <!-- End of Recipe Card -->--}}
{{--                        @endforeach--}}
{{--                    </a>--}}
{{--                    <!-- End of Grid Container -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}
