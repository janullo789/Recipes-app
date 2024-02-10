<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Twoja lodówka') }}
        </h2>
    </x-slot>

    <div class="bg-gray-100 py-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="rounded-lg bg-white shadow-lg">
                <div class="p-6">
                    <form method="POST" action="{{ route('fridge.store') }}" class="space-y-6">
                        @csrf
                        @foreach ($ingredients as $category => $ingredientsGroup)
                            <div>
                                <h2 class="mb-4 flex items-center text-lg">
                                    <span class="flex-grow border-t border-gray-300"></span>
                                    <span class="px-2 text-center">
                                        {{ ucfirst($category) }}
                                    </span>
                                    <span class="flex-grow border-t border-gray-300"></span>
                                </h2>
                                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6">
                                    @foreach ($ingredientsGroup as $ingredient)
                                        <div class="flex flex-col p-2 rounded-lg shadow hover:shadow-md transition ease-in-out duration-150
                                                {{ isset($user_ingredients[$ingredient->id]) && $user_ingredients[$ingredient->id]->quantity > 0 ? 'bg-green-100' : 'bg-white' }}">
                                            <p class="mb-1 font-medium text-md">{{ $ingredient->name }}<span
                                                    class="text-sm text-gray-500"> [{{ $ingredient->unit }}]</span></p>
                                            <label>
                                                <input type="number"
                                                       min="0"
                                                       name="quantity[{{ $ingredient->id }}]"
                                                       value="{{ $user_ingredients[$ingredient->id]->quantity ?? '' }}"
                                                       class="w-full rounded border p-1 text-sm">
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                        <button type="submit"
                                class="mt-4 w-full rounded bg-indigo-700 px-4 py-2 text-white hover:bg-indigo-600 sm:w-auto">
                            {{ __('Zapisz') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
