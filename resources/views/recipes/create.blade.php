@php use App\Enums\Recipe\RecipeDiet;use App\Enums\Recipe\RecipeTime; @endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Przepisy') }} - {{ __('Tworzenie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-xl space-y-6 sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <form method="POST" action="{{ route('recipes.store') }}" class="px-6" enctype="multipart/form-data">
                    @csrf

                    <!-- Name -->
                    <div class="my-4">
                        <x-input-label for="name" :value="__('Nazwa')"/>
                        <x-text-input id="name" class="mt-1 block w-full" type="text" maxlength="100" name="name"
                                      :value="old('name')"
                                      required autofocus autocomplete="name"/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                    </div>

                    <!-- Description -->
                    <div class="my-4">
                        <x-input-label for="description" :value="__('Opis')"/>
                        <x-textarea id="description" name="description" required
                                    autofocus>{{ old('description') }}</x-textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2"/>
                    </div>

                    <!-- Instruction -->
                    <div class="my-4">
                        <x-input-label for="instruction" :value="__('Instrukcja')"/>
                        <x-textarea id="instruction" name="instruction" required
                                    autofocus>{{ old('instruction') }}</x-textarea>
                        <x-input-error :messages="$errors->get('instruction')" class="mt-2"/>
                    </div>

                    <!-- Diet -->
                    <div class="my-4">
                        <x-input-label for="diet" :value="__('Dieta')"/>
                        <select id="diet" name="diet"
                                class="my-1 block w-full rounded-md border border-gray-300 bg-gray-50 text-gray-900 shadow-sm p-2.5 focus:border-gray-500 focus:ring-gray-500 dark:placeholder-gray-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500">
                            <option value="" selected>-</option>
                            @foreach(RecipeDiet::TYPES as $diet)
                                <option value="{{ $diet }}">{{ $diet }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('diet')" class="mt-2"/>
                    </div>

                    <!-- Time -->
                    <div class="my-4">
                        <x-input-label for="time" :value="__('Czas')"/>
                        <select id="time" name="time"
                                class="my-1 block w-full rounded-md border border-gray-300 bg-gray-50 text-gray-900 p-2.5 focus:border-gray-500 focus:ring-gray-500 dark:placeholder-gray-400 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500">
                            <option value="" selected>-</option>
                            @foreach(RecipeTime::TYPES as $time)
                                <option value="{{ $time }}">{{ $time }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('time')" class="mt-2"/>
                    </div>

                    <!-- Ingredients -->
                    <div class="my-4">
                        <x-input-label for="ingredients" :value="__('Składniki')"/>
                        @foreach($ingredients->groupBy('category') as $category => $categoryIngredients)
                            <div class="mb-2 text-center">
                                <h2 class="pt-4 text-lg font-semibold">{{ Str::upper($category) }}</h2>
                                <div class="grid grid-cols-2 gap-4">
                                    @foreach($categoryIngredients as $ingredient)
                                        <div class="mt-1 flex items-center text-left">
                                            <label for="ingredient-{{ $ingredient->id }}"
                                                   class="mt-1 inline-flex items-center">{{ $ingredient->name }}</label>
                                            <input type="number" name="ingredients[{{ $ingredient->id }}][id]"
                                                   value="{{ $ingredient->id }}" hidden>
                                            <input type="number" name="ingredients[{{ $ingredient->id }}][quantity]"
                                                   min="0" step="1" value=0
                                                   class="ml-2 w-1/3 rounded-md border border-gray-300 px-2 py-1 focus:border-gray-500 focus:ring-gray-500">
                                            <span class="ml-1 text-sm text-gray-500">[{{ $ingredient->unit }}]</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                        <x-input-error :messages="$errors->get('ingredients')" class="mt-2"/>
                    </div>

                    <!-- Image -->
                    <div class="my-4">
                        <x-input-label for="image" :value="__('Obraz')"/>
                        <input id="image" class="mt-1 block w-full" type="file" name="image"
                               :value="old('image')"
                               autofocus/>
                        <x-input-error :messages="$errors->get('image')" class="mt-2"/>
                    </div>

                    <div class="my-4 flex items-center justify-between">
                        <a href="{{ route('recipes.index') }}">
                            <x-back-button>
                                {{ __('Wróć') }}
                            </x-back-button>
                        </a>
                        <x-primary-button>
                            {{ __('Zapisz') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
