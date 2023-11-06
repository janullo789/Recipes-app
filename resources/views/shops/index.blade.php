<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Sklepy') }}
        </h2>
    </x-slot>

    <div>
        @livewire('shops-table')
    </div>

</x-app-layout>

{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="text-xl font-semibold leading-tight text-gray-800">--}}
{{--            {{ __('Sklepy') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <section class="py-12">--}}
{{--        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">--}}
{{--            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">--}}
{{--                <div class="p-6">--}}
{{--                    <div class="flex items-start text-xl">--}}
{{--                        <div class="flex-1">--}}
{{--                            @can('create', new App\Models\Shop)--}}
{{--                                <a href="{{ route('shops.create') }}"--}}
{{--                                   class="mb-10 w-full rounded border border-gray-400 bg-green-400 px-4 py-2 uppercase text-gray-800 shadow hover:bg-green-500">--}}
{{--                                    {{ __('shop.create') }}--}}
{{--                                </a>--}}
{{--                            @endcan--}}
{{--                            <form method="GET" action="" accept-charset="UTF-8" class="flex items-center mt-6">--}}
{{--                                <div class="mr-2">--}}
{{--                                    <input placeholder="{{ __('shop.search_text') }}" name="q" type="text" id="q"--}}
{{--                                           class="h-12 w-full rounded-lg border border-gray-300 px-4 text-lg text-gray-900 focus:border-blue-500 focus:ring-blue-500">--}}
{{--                                </div>--}}
{{--                                <input type="submit" value="{{ __('shop.search') }}"--}}
{{--                                       class="bg-gray-500 text-white px-4 py-2 rounded mr-2">--}}
{{--                                <a href="{{ route('shops.index') }}"--}}
{{--                                   class="text-blue-500 hover:underline">{{ __('app.reset') }}</a>--}}
{{--                            </form>--}}
{{--                            <table class="w-full text-left text-sm text-gray-700 mt-4">--}}
{{--                                <thead class="bg-gray-50 text-base uppercase">--}}
{{--                                <tr>--}}
{{--                                    <th class="py-2 px-4 border-b border-gray-200">{{ __('shop.id') }}</th>--}}
{{--                                    <th class="py-2 px-4 border-b border-gray-200">{{ __('shop.name') }}</th>--}}
{{--                                    <th class="py-2 px-4 border-b border-gray-200">{{ __('shop.category') }}</th>--}}
{{--                                    <th class="py-2 px-4 border-b border-gray-200">{{ __('shop.address') }}</th>--}}
{{--                                    <th class="py-2 px-4 border-b border-gray-200">{{ __('Coordinates') }}</th>--}}
{{--                                    <th class="py-2 px-4 border-b border-gray-200 text-center">{{ __('app.action') }}</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                @foreach($shops as $key => $shop)--}}
{{--                                    <tr class="border-b bg-white hover:bg-gray-50">--}}
{{--                                        <td class="py-2 px-4 border-b border-gray-200">{{ $shop->id }}</td>--}}
{{--                                        <td class="py-2 px-4 border-b border-gray-200">{{ $shop->name }}</td>--}}
{{--                                        <td class="py-2 px-4 border-b border-gray-200">{{ $shop->address }}</td>--}}
{{--                                        <td class="py-2 px-4 border-b border-gray-200">{{ $shop->latitude }}, {{ $shop->longitude }}</td>--}}
{{--                                        <td class="py-2 px-4 border-b border-gray-200 text-center">--}}
{{--                                            <a href="{{ route('shops.show', $shop) }}"--}}
{{--                                               id="show-shop-{{ $shop->id }}"--}}
{{--                                               class="text-blue-500 hover:underline">{{ __('app.show') }}</a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--</x-app-layout>--}}
