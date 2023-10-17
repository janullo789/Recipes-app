<div>
    <section class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="flex items-start p-6 text-xl">
                    <div class="flex-1">
                        <a href="{{ route('ingredients.create') }}"
                           class="w-full mb-10 rounded border border-gray-400 bg-green-400 px-4 py-2 uppercase text-gray-800 shadow hover:bg-green-500">
                            {{ __('Dodaj nowy składnik') }}
                        </a>
                        <input wire:model.live.debounce.250ms="search" type="text"
                               class="w-full h-12 px-4 mt-6 mb-4 text-lg text-gray-900 border rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                               placeholder={{ __('Szukaj') }}>
                        <div class="flex items-center mb-4">
                            <span class="mr-2">{{ __('Kategoria') }}:</span>
                            <select wire:model.live="category"
                                    class="w-full h-12 px-4 text-lg text-gray-500 border rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                <option value="">{{ __('wszystkie') }}</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category }}">{{ $category }}</option>
                                @endforeach
                            </select>
                        </div>

                        <table class="w-full text-sm text-left text-gray-700">
                            <thead class="text-base uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                @include('livewire.includes.table-sortable-th', [
                                    'name' => 'id',
                                    'displayName' => __('ID')
                                ])
                                @include('livewire.includes.table-sortable-th', [
                                    'name' => 'name',
                                    'displayName' => __('Nazwa')
                                ])
                                @include('livewire.includes.table-sortable-th', [
                                    'name' => 'category',
                                    'displayName' => __('Kategoria')
                                ])
                                @include('livewire.includes.table-sortable-th', [
                                    'name' => 'unit',
                                    'displayName' => __('Jednostka')
                                ])
                                @include('livewire.includes.table-sortable-th', [
                                    'name' => 'calories',
                                    'displayName' => __('Kalorie')
                                ])
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">{{ __('Akcje') }}</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ingredients as $ingredient)
                                <tr class="border-b bg-white hover:bg-gray-50">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $ingredient->id }}</th>
                                    <td class="px-6 py-4">{{ $ingredient->name }}</td>
                                    <td class="px-6 py-4">{{ $ingredient->category }}</td>
                                    <td class="px-6 py-4">{{ $ingredient->unit }}</td>
                                    <td class="px-6 py-4">{{ $ingredient->calories }}</td>
                                    <td class="px-6 py-4 flex items-center justify-end">
                                        <a href="{{ route('ingredients.edit', $ingredient->id) }}"
                                           class="px-3 py-1 mr-1.5 text-white bg-blue-500 rounded hover:bg-blue-600">E</a>
                                        <button
                                            onclick="confirm('Are you sure you want to delete {{ $ingredient->name }}?') || event.stopImmediatePropagation()"
                                            wire:click="delete({{ $ingredient->id }})"
                                            class="px-3 py-1 text-white bg-red-500 rounded hover:bg-red-600">
                                            X
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="flex justify-evenly py-4 space-x-2">
                            <select wire:model.live='perPage'
                                    class="w-30 h-10 px-4 text-lg text-white bg-blue-700 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            {{ $ingredients->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
