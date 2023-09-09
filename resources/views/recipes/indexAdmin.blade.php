<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Ingredients') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="flex items-start">
                    <form class="border-gray-200 p-6 text-xl" id="sidebar-filter">
                        <div class="flex content-center justify-center">
                            <a href="{{ route('recipes.create') }}"
                               class="mb-10 rounded border border-gray-400 bg-green-400 px-4 py-2 uppercase text-gray-800 shadow hover:bg-green-500">
                                {{ __('Add new recipe') }}
                            </a>
                        </div>
                        @csrf
{{--                        <div class="border-b-2 border-gray-500 pb-1 text-center font-medium">--}}
{{--                            <label class="uppercase">{{ __('Category') }}</label>--}}
{{--                        </div>--}}
{{--                        <ul role="list" class="px-2 py-4 font-medium text-gray-900">--}}
{{--                            @foreach($categories as $category)--}}
{{--                                <li class="py-1">--}}
{{--                                    <input id="category-{{ $category }}" type="checkbox"--}}
{{--                                           name="filter[categories][]" value="{{ $category }}"--}}
{{--                                           class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500">--}}
{{--                                    <label for="category-{{ $category }}"--}}
{{--                                           class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ ucfirst($category) }}</label>--}}
{{--                                </li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                        <div class="flex content-center justify-center">--}}
{{--                            <a href="#"--}}
{{--                               class="rounded border border-gray-400 bg-white px-4 py-2 font-semibold uppercase text-gray-800 shadow hover:bg-gray-100"--}}
{{--                               id="filter-button">--}}
{{--                                {{ __('Search') }}--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </form>
                    <div class="flex-1">
                        <table class="w-full text-left text-sm text-gray-700 dark:text-gray-400">
                            <thead
                                class="bg-gray-50 text-base uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    {{ __('Name') }}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{ __('Description') }}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{ __('Diet') }}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{ __('Time') }}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{ __('Ingredients') }}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{ __('Actions') }}
                                </th>
                            </tr>
                            </thead>
                            <tbody id="ingredients-list">
                            @foreach($recipes as $recipe)
                                <tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                        {{ $recipe->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $recipe->description }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if(isset($recipe->diet))
                                            {{ $recipe->diet }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $recipe->time }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <ul>
                                            @foreach ($recipe->ingredients as $ingredient)
                                                <li>{{ $ingredient->name }} - {{ $ingredient->pivot->quantity }} ({{ $ingredient->unit }}) </li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td class="px-6 py-4">
                                        <ul>
                                            <li>
{{--                                        <a href="{{ route('ingredients.edit', $ingredient->id) }}"--}}
                                                <a href="{{ route('ingredients.index') }}"
                                                   class="font-medium text-blue-600 hover:underline dark:text-blue-500">{{ __('Edit') }}</a>
                                            </li>
                                            <li>
                                                <button data-id="{{ $recipe->id }}"
                                                        class="font-medium text-red-600 delete hover:underline dark:text-blue-500">
                                                    {{ __('Delete') }}
                                                </button>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
{{--                        <div class="pagination-menu">--}}
{{--                            <div class="flex justify-evenly py-4 space-x-2 rtl:space-x-reverse">--}}
{{--                                <a class="inline-flex w-20 items-center rounded-lg bg-blue-700 px-5 text-center text-sm font-medium text-white items-actual-count py-2.5 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"--}}
{{--                                   data-dropdown-toggle="dropdown" role="button" aria-haspopup="true"--}}
{{--                                   aria-expanded="false">10</a>--}}
{{--                                <!-- Dropdown menu -->--}}
{{--                                <div id="dropdown"--}}
{{--                                     class="z-10 hidden w-44 rounded-lg bg-white shadow items-count divide-y divide-gray-100 dark:bg-gray-700"--}}
{{--                                     aria-labelledby="navbarDropdown" x-placement="bottom-end"--}}
{{--                                     style="will-change: transform; position: absolute; transform: translate3d(120px, 48px, 0px); top: 0px; left: 0px;">--}}
{{--                                    <a href="#"--}}
{{--                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">10</a>--}}
{{--                                    <a href="#"--}}
{{--                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">20</a>--}}
{{--                                    <a href="#"--}}
{{--                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">50</a>--}}
{{--                                    <a href="#"--}}
{{--                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">100</a>--}}
{{--                                </div>--}}
{{--                                <div class="pagination-links">--}}
{{--                                    {{ $ingredients->links() }}--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <input type="hidden" id="deleteUrl" value="{{url('ingredients')}}/"/>--}}
{{--    <input type="hidden" id="editUrl" value="{{url('ingredients/edit')}}/"/>--}}
</x-app-layout>
<x-slot name="jsFiles">
{{--    <script src="{{ asset("js/ingredients/index.js") }}"></script>--}}
</x-slot>
