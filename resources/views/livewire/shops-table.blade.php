<div>
    <section class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="flex items-start p-6 text-xl">
                    <div class="flex-1">
                        <a href="{{ route('shops.create') }}"
                           class="mb-10 w-full rounded border border-gray-400 bg-green-400 px-4 py-2 uppercase text-gray-800 shadow hover:bg-green-500">
                            {{ __('Dodaj nowy sklep') }}
                        </a>
                        <input wire:model.live.debounce.250ms="search" type="text"
                               class="mt-6 mb-4 h-12 w-full rounded-lg border border-gray-300 px-4 text-lg text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                               placeholder={{ __('Szukaj') }}>
                        <div class="mb-4 flex items-center">
                            <span class="mr-2">{{ __('Kategoria') }}:</span>
                            <select wire:model.live="category"
                                    class="h-12 w-full rounded-lg border border-gray-300 px-4 text-lg text-gray-500 focus:border-blue-500 focus:ring-blue-500">
                                <option value="">{{ __('wszystkie') }}</option>
                                <option value="supermarket">{{ __('supermarket') }}</option>
                                <option value="piekarnia">{{ __('piekarnia') }}</option>
                                <option value="kiosk">{{ __('kiosk') }}</option>
                                <option value="centrum handlowe">{{ __('centrum handlowe') }}</option>
                                <option value="ogólny">{{ __('ogólny') }}</option>
                                <option value="wielobranżowy">{{ __('wielobranżowy') }}</option>
                                <option value="inny">{{ __('inny') }}</option>
                            </select>
                        </div>

                        <table class="w-full text-left text-sm text-gray-700">
                            <thead class="bg-gray-50 text-base dark:bg-gray-700 dark:text-gray-400">
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
                                <th scope="col" class="px-6 py-3">
                                    {{ __('Adres') }}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{ __('Współrzędne') }}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">{{ __('Akcje') }}</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($shops as $shop)
                                <tr class="border-b bg-white hover:bg-gray-50">
                                    <th scope="row"
                                        class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                                        {{ $shop->id }}</th>
                                    <td class="px-6 py-4">{{ $shop->name }}</td>
                                    <td class="px-6 py-4">{{ $shop->category }}</td>
                                    <td class="px-6 py-4">{{ $shop->address }}</td>
                                    <td class="px-6 py-4">{{ $shop->latitude }}, {{ $shop->longitude }}</td>
                                    <td class="flex items-center justify-end px-6 py-4">
                                        <a href="{{ route('shops.edit', $shop->id) }}"
                                           class="rounded bg-blue-500 px-3 py-1 text-white mr-1.5 hover:bg-blue-600">E</a>
                                        <button
                                            onclick="confirm('Czy na pewno chcesz usunąć sklep o nazwie {{ $shop->name }}?') || event.stopImmediatePropagation()"
                                            wire:click="delete({{ $shop->id }})"
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
                            {{ $shops->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
