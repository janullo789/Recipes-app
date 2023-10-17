<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-indigo-700 leading-tight">
            {{ $recipe->name }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                <div class="p-6 bg-white border-b border-gray-300">
                    <img src="{{ asset('storage/' . $recipe->image_path) }}" alt="{{ $recipe->name }}" class="w-full h-64 object-cover mb-8">
                    <h3 class="text-2xl mb-2">{{ __('Description') }}</h3>
                    <p>{{ $recipe->description }}</p>

                    <h3 class="text-2xl mt-8 mb-2">{{ __('Instruction') }}</h3>
                    <p>{{ $recipe->instruction }}</p>

                    <h3 class="text-2xl mt-8 mb-2">{{ __('Diet') }}: {{ $recipe->diet }}</h3>
                    <h3 class="text-2xl mt-8 mb-2">{{ __('Meal preparation time') }}: {{ $recipe->time }}</h3>

                    <h3 class="text-2xl mt-8 mb-2">{{ __('Ingredient') }}:</h3>
                    <ul>
                        @foreach ($recipe->ingredients as $ingredient)
                            <li>{{ $ingredient->name }} - {{ $ingredient->pivot->quantity }} [{{ $ingredient->unit }}]</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
