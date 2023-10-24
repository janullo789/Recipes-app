<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-indigo-700 leading-tight">
            {{ __('My Fridge') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-lg">
                <div class="p-6">
                    <form method="POST" action="{{ route('fridge.store') }}" class="space-y-6">
                        @csrf
                        @foreach ($ingredients as $category => $ingredientsGroup)
                            <div>
                                <h2 class="text-lg mb-4 flex items-center">
                                    <span class="flex-grow border-t border-gray-300"></span>
                                    <span class="px-2 text-center">
                                        {{ ucfirst($category) }}
                                    </span>
                                    <span class="flex-grow border-t border-gray-300"></span>
                                </h2>
                                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                                    @foreach ($ingredientsGroup as $ingredient)
                                        <div class="flex flex-col p-2 rounded-lg shadow hover:shadow-md transition ease-in-out duration-150
                                                {{ isset($user_ingredients[$ingredient->id]) ? 'bg-green-100' : 'bg-white' }}">
                                            <p class="text-md font-medium mb-1">{{ $ingredient->name }}</p>
                                            <input type="number"
                                                   name="quantity[{{ $ingredient->id }}]"
                                                   value="{{ $user_ingredients[$ingredient->id]->quantity ?? '' }}"
                                                   class="border rounded p-1 w-full text-sm">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                        <button type="submit" class="mt-4 w-full sm:w-auto bg-indigo-700 text-white py-2 px-4 rounded hover:bg-indigo-600">
                            Zapisz
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
