<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Ingredients') }} - {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-xl space-y-6 sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <form method="POST" action="{{ route('ingredients.store') }}" class="px-6">
                    @csrf

                    <!-- Name -->
                    <div class="my-4">
                        <x-input-label for="name" :value="__('Name')"/>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" maxlength="100" name="name" :value="old('name')"
                                      required autofocus autocomplete="name"/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                    </div>

                    <!-- Category -->
                    <div class="my-4">
                        <x-input-label for="category" :value="__('Category')"/>
                        <select id="category" name="category" class="bg-gray-50 shadow-sm border my-1 border-gray-300 text-gray-900 rounded-md focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="" disabled selected>Select your option</option>
                            @foreach(\App\Enums\Ingredient\IngredientCategory::TYPES as $category)
                                <option value="{{ $category }}">{{ $category }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('category')" class="mt-2"/>
                    </div>

                    <!-- Unit -->
                    <div class="my-4">
                        <x-input-label for="unit" :value="__('Unit')"/>
                        <select id="unit" name="unit" class="bg-gray-50 border my-1 border-gray-300 text-gray-900 rounded-md focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="" disabled selected>Select your option</option>
                            @foreach(\App\Enums\Ingredient\IngredientUnit::TYPES as $unit)
                                <option value="{{ $unit }}">{{ $unit }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('unit')" class="mt-2"/>
                    </div>

                    <!-- Calories -->
                    <div class="my-4">
                        <x-input-label for="calories" :value="__('Calories')"/>
                        <x-numeric-input id="calories" class="block mt-1 w-full" type="number" step=".01" min="0" name="calories" :value="old('calories')"
                                      required autofocus autocomplete="calories"/>
                        <x-input-error :messages="$errors->get('calories')" class="mt-2"/>
                    </div>

                    <div class="flex items-center justify-between my-4">
                       <a href="{{ route('ingredients.index') }}">
                            <x-back-button>
                                {{ __('Back') }}
                            </x-back-button>
                        </a>
                        <x-primary-button>
                            {{ __('Create') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
