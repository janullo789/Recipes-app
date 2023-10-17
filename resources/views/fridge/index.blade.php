<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-indigo-700 leading-tight">
            {{ __('My Fridge') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                <div class="p-6 bg-white border-b border-gray-300">
                    <form method="POST" action="{{ route('fridge.store') }}">
                        @csrf
                        @foreach ($ingredients as $category => $ingredientsGroup)
                            <h2 class="text-2xl">{{ $category }}</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                @foreach ($ingredientsGroup as $ingredient)
                                    <div class="flex flex-col rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                            <div class="flex-1">
                                                <p class="text-xl font-semibold text-gray-900">
                                                    {{ $ingredient->name }}
                                                </p>
                                                <input type="number"
                                                       name="quantity[{{ $ingredient->id }}]"
                                                       value="{{ $user_ingredients[$ingredient->id]->quantity ?? '' }}">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                        <button type="submit" class="mt-4 px-4 py-2 bg-indigo-700 text-white rounded">Zapisz</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
