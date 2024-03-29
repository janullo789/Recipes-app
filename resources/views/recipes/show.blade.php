<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl leading-tight">
            {{ $recipe->name }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Main Container -->
            <div class="bg-white overflow-hidden shadow-xl rounded-xl p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Photo -->
                    <div class="col-span-1 lg:col-span-2">
                        <img src="{{ asset('storage/' . $recipe->image_path) }}" alt="{{ $recipe->name }}" class="w-full h-64 object-cover rounded-lg shadow-lg mb-6">
                    </div>

                    <!-- Description -->
                    <div class="col-span-1">
                        <div class="bg-gray-100 p-4 rounded-lg shadow-lg">
                            <h3 class="text-2xl mb-2">{{ __('Opis') }}</h3>
                            <p>{{ $recipe->description }}</p>
                        </div>

                        <!-- Button execution -->
                        @auth
                            <form method="POST" action="{{ route('execute_recipe', $recipe->id) }}" class="mt-4">
                                @csrf
                                <button type="submit" class="btn btn-primary bg-indigo-700 hover:bg-indigo-800 text-white font-bold py-2 px-4 rounded shadow-lg hover:shadow-xl transition duration-300">
                                    {{ __('Wykonaj przepis') }}
                                </button>
                            </form>
                        @endauth
                    </div>

                    <!-- Instruction -->
                    <div class="col-span-1">
                        <div class="bg-gray-100 p-4 rounded-lg shadow-lg">
                            <h3 class="text-2xl mb-2">{{ __('Składniki') }}</h3>
                            <ul>
                                @foreach ($recipe->ingredients as $ingredient)
                                    <li>{{ $ingredient->name }} - {{ $ingredient->pivot->quantity }} [{{ $ingredient->unit }}]</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Additionally description -->
                    <div class="col-span-1 lg:col-span-2">
                        <div class="bg-gray-100 p-4 rounded-lg shadow-lg">
                            @if (!empty($recipe->diet))
                                <h3 class="text-2xl mb-2"><span class="font-bold">{{ __('Dieta') }}:</span> {{ $recipe->diet }}</h3>
                            @endif
                            <h3 class="text-2xl mb-2"><span class="font-bold">{{ __('Czas przygotowania') }}:</span> {{ $recipe->time }}</h3>
                            <h3 class="text-2xl mb-2"><span class="font-bold">{{ __('Suma kalorii') }}:</span> {{ $totalCalories }}</h3>
                        </div>
                    </div>

                    <!-- Ingredients -->
                    <div class="col-span-1 lg:col-span-3">
                        <div class="bg-gray-100 p-4 rounded-lg shadow-lg whitespace-pre-line">
                            <h3 class="text-2xl mb-2">{{ __('Instrukcja') }}</h3>
                            <p>{{ $recipe->instruction }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="missing-ingredients" data-ingredients="{{ json_encode(session('missingIngredients')) }}"></div>
    <div id="recipe-status" data-success="{{ session('success') ? 'true' : 'false' }}" data-used-ingredients="{{ session('usedIngredients') }}"></div>
    @section('custom_js')
        @vite(['resources/js/recipes/show.js'])
    @endsection
</x-app-layout>
