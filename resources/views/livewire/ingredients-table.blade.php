<div>
    <section class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="flex items-start p-6 text-xl">
                    <div class="flex-1">
                        <a href="{{ route('ingredients.create') }}"
                           class="mb-10 w-full rounded border border-gray-400 bg-green-400 px-4 py-2 uppercase text-gray-800 shadow hover:bg-green-500">
                            {{ __('Dodaj nowy składnik') }}
                        </a>
                        <input wire:model.live.debounce.250ms="search" type="text"
                               class="mt-6 mb-4 h-12 w-full rounded-lg border border-gray-300 px-4 text-lg text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                               placeholder={{ __('Szukaj') }}>
                        <div class="mb-4 flex items-center">
                            <span class="mr-2">{{ __('Kategoria') }}:</span>
                            <select wire:model.live="category"
                                    class="h-12 w-full rounded-lg border border-gray-300 px-4 text-lg text-gray-500 focus:border-blue-500 focus:ring-blue-500">
                                <option value="">{{ __('wszystkie') }}</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category }}">{{ $category }}</option>
                                @endforeach
                            </select>
                        </div>

                        <table class="w-full text-left text-sm text-gray-700">
                            <thead class="bg-gray-50 text-base uppercase dark:bg-gray-700 dark:text-gray-400">
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
                                        class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                                        {{ $ingredient->id }}</th>
                                    <td class="px-6 py-4">{{ $ingredient->name }}</td>
                                    <td class="px-6 py-4">{{ $ingredient->category }}</td>
                                    <td class="px-6 py-4">{{ $ingredient->unit }}</td>
                                    <td class="px-6 py-4">{{ $ingredient->calories }}</td>
                                    <td class="flex items-center justify-end px-6 py-4">
                                        <a href="{{ route('ingredients.edit', $ingredient->id) }}"
                                           class="rounded bg-blue-500 px-3 py-1 text-white mr-1.5 hover:bg-blue-600">E</a>
                                        <button
                                            onclick="confirm('Czy na pewno chcesz usunąć składnik o nazwie {{ $ingredient->name }}?') || event.stopImmediatePropagation()"
                                            wire:click="delete({{ $ingredient->id }})"
                                            class="rounded bg-red-500 px-3 py-1 text-white hover:bg-red-600">
                                            X
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="flex justify-evenly py-4 space-x-2">
                            <select wire:model.live='perPage'
                                    class="h-12 rounded-lg bg-blue-700 px-4 text-lg text-white w-30 focus:border-blue-500 focus:ring-blue-500">
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
