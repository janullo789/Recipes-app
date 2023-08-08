<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ingredients') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="flex items-start">
                    <form class="p-6 text-xl border-gray-200" id="sidebar-filter">
                        <div class="pb-1 text-center font-medium border-b-2 border-gray-500">
                            <label class="uppercase">{{ __('Category') }}</label>
                        </div>
                        <ul role="list" class="px-2 py-4 font-medium text-gray-900">
                            @foreach($categories as $category)
                                <li class="py-1">
                                    <input id="category-{{ $category }}" type="checkbox"
                                           name="filter[categories][]" value="{{ $category }}"
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="category-{{ $category }}"
                                           class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ ucfirst($category) }}</label>
                                </li>
                            @endforeach
                        </ul>
                        <div class="content-center flex justify-center">
                            <a href="#"
                               class="bg-white hover:bg-gray-100 text-gray-800 font-semibold uppercase py-2 px-4 border border-gray-400 rounded shadow"
                               id="filter-button">
                                {{ __('Search') }}
                            </a>
                        </div>
                    </form>
                    <div class="flex-1">
                        <table class="w-full text-sm text-left text-gray-700 dark:text-gray-400">
                            <thead
                                class="text-base text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                            <tbody id="ingredients-list">
                            @foreach($ingredients as $ingredient)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                                        <a href="#"
                                           class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-slot name="jsFiles">
    <script src="{{ asset("js/ingredients/index.js") }}"></script>
</x-slot>
