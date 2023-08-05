<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ingredients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-red-500 dark:text-red-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            {{ __('Name') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('Category') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('Unit') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('Calories') }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __('Actions') }}
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ingredients as $ingredient)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $ingredient->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $ingredient->category }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $ingredient->unit }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $ingredient->calories }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
