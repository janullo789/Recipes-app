@php use App\Enums\Recipe\RecipeDiet;use App\Enums\Recipe\RecipeTime; @endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Recipes') }} - {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-xl space-y-6 sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <form method="POST" action="{{ route('recipes.update', $recipe->id) }}" class="px-6">
                    @csrf

                    <!-- Name -->
                    <div class="my-4">
                        <x-input-label for="name" :value="__('Name')"/>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" maxlength="100" name="name" :value="old('name', $recipe->name)"
                                      required autofocus autocomplete="name"/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                    </div>

                    <!-- Description -->
                    <div class="my-4">
                        <x-input-label for="description" :value="__('Description')"/>
                        <x-text-input id="description" class="block mt-1 w-full" type="text" name="description"
                                      :value="old('description', $recipe->description)"
                                      required autofocus autocomplete="description"/>
                        <x-input-error :messages="$errors->get('description')" class="mt-2"/>
                    </div>

                    <!-- Instruction -->
                    <div class="my-4">
                        <x-input-label for="instruction" :value="__('Instruction')"/>
                        <x-text-input id="instruction" class="block mt-1 w-full" type="text" name="instruction"
                                      :value="old('instruction', $recipe->instruction)"
                                      required autofocus autocomplete="instruction"/>
                        <x-input-error :messages="$errors->get('instruction')" class="mt-2"/>
                    </div>

                    <!-- Diet -->
                    <div class="my-4">
                        <x-input-label for="diet" :value="__('Diet')"/>
                        <select id="diet" name="diet"
                                class="bg-gray-50 shadow-sm border my-1 border-gray-300 text-gray-900 rounded-md focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="{{ $recipe->diet ? : null }}" selected>{{ $recipe->diet ? : '-' }}</option>
                            <option value="">-</option>
                            @foreach(RecipeDiet::TYPES as $diet)
                                <option value="{{ $diet }}">{{ $diet }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('diet')" class="mt-2"/>
                    </div>

                    <!-- Time -->
                    <div class="my-4">
                        <x-input-label for="time" :value="__('Time')"/>
                        <select id="time" name="time"
                                class="bg-gray-50 border my-1 border-gray-300 text-gray-900 rounded-md focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="{{ $recipe->time ? : null}}" selected>{{ $recipe->time ? : '-'}}</option>
                            <option value="">-</option>
                            @foreach(RecipeTime::TYPES as $time)
                                <option value="{{ $time }}">{{ $time }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('time')" class="mt-2"/>
                    </div>

                    <div class="flex items-center justify-between my-4">
                       <a href="{{ route('recipes.index') }}">
                            <x-back-button>
                                {{ __('Back') }}
                            </x-back-button>
                        </a>
                        <x-primary-button>
                            {{ __('Save') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
