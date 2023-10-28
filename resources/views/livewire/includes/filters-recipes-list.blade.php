<div>
    <input wire:model.live.debounce.250ms="search" type="text"
           class="mb-4 h-12 w-full rounded-lg border border-gray-300 px-4 text-lg text-gray-900 focus:border-blue-500 focus:ring-blue-500"
           placeholder={{ __('Szukaj') }}>

    <div class="mb-4 flex items-center">
        <span class="mr-2">{{ __('Dieta') }}:</span>
        <select wire:model.live="diet"
                class="h-12 w-full rounded-lg border border-gray-300 px-4 mr-4 text-lg text-gray-500 focus:border-blue-500 focus:ring-blue-500">
            <option value="">{{ __('-') }}</option>
            @foreach(\App\Enums\Recipe\RecipeDiet::TYPES as $type)
                <option value="{{ $type }}">{{ $type }}</option>
            @endforeach
        </select>
        <span class="mr-2">{{ __('Czas') }}:</span>
        <select wire:model.live="time"
                class="h-12 w-full rounded-lg border border-gray-300 px-4 text-lg text-gray-500 focus:border-blue-500 focus:ring-blue-500">
            <option value="">{{ __('każdy') }}</option>
            @foreach(\App\Enums\Recipe\RecipeTime::TYPES as $type)
                <option value="{{ $type }}">{{ $type }}</option>
            @endforeach
        </select>
    </div>

    @auth
        <div class="mt-4 flex justify-center items-center">
            <label class="relative inline-flex items-center cursor-pointer mb-6">
                <input type="checkbox" wire:click="toggleShowOnlyAvailable" value="" class="sr-only peer">
                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                <span class="ml-3 text-base text-gray-600">{{ __('Pokaż tylko możliwe do wykonania') }}</span>
            </label>
        </div>
    @endauth
</div>
