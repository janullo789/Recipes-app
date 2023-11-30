<div>
    <section class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="flex items-start p-6 text-xl">
                    <div class="flex-1">
                        <table class="w-full text-left text-sm text-gray-700">
                            <thead class="bg-gray-50 text-base dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">
                                    {{ __('Nazwa') }}
                                </th>
                                <th scope="col" class="px-4 py-3">
                                    {{ __('Opis') }}
                                </th>
                                @include('livewire.includes.table-sortable-th', [
                                    'name' => 'created_at',
                                    'displayName' => __('Wykonano')
                                ])
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">{{ __('Akcje') }}</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($userRecipes as $execution)
                                <tr class="border-b bg-white hover:bg-gray-50" wire:key="execution-{{ $execution->id }}">
                                    <td class="px-6 py-4">{{ $execution->recipe->name }}</td>
                                    <td class="px-6 py-4">{{ $execution->recipe->description }}</td>
                                    <td class="px-6 py-4">{{ $execution->created_at }}</td>
                                    <td class="flex items-center justify-end px-6 py-4">
                                        <button
                                            onclick="confirm('Czy na pewno chcesz usunąć przepis o nazwie {{ $execution->recipe->name }}?') || event.stopImmediatePropagation()"
                                            wire:click="delete({{ $execution->id }})"
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
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                            </select>
                            {{ $userRecipes->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
