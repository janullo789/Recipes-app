<div>
    <button wire:click="toggleShowOnlyAvailable">
        {{ $showOnlyAvailable ? 'Pokaż wszystkie' : 'Pokaż tylko dostępne' }}
    </button>

    <!-- Tutaj wyświetlaj przepisy -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($recipes as $recipe)
            <!-- Recipe Card -->
            <a href="{{ route('recipes.show', $recipe->id) }}" class="block hover:no-underline">
                <div class="flex flex-col rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="{{ asset('storage/' . $recipe->image_path) }}" alt="{{ $recipe->name }}">
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            @if (!empty($recipe->diet))
                                <p class="text-sm font-medium text-indigo-700">
                                    {{ $recipe->diet }}
                                </p>
                            @else
                                <p class="text-sm font-medium text-transparent">
                                    Placeholder
                                </p>
                            @endif
                            <div class="block mt-2">
                                <p class="text-xl font-bold text-gray-900">
                                    {{ $recipe->name }}
                                </p>
                            </div>
                            <p class="mt-3 text-base text-gray-600">
                                {{ __('Meal preparation time') }}: {{ $recipe->time }}
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End of Recipe Card -->
        @endforeach
    </div>
</div>
