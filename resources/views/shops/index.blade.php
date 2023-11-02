<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Sklepy') }}
        </h2>
    </x-slot>

    <div class="mb-3">
        <div class="float-right">
            @can('create', new App\Models\Shop)
                <a href="{{ route('shops.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">{{ __('shop.create') }}</a>
            @endcan
        </div>
        <h1 class="text-xl font-bold">{{ __('shop.list') }} <small class="text-gray-500">{{ __('app.total') }}
                : {{ $shops->total() }} {{ __('shop.shop') }}</small></h1>
    </div>

    <div class="flex flex-wrap -mx-2">
        <div class="w-full md:w-12/12 px-2">
            <div class="bg-white shadow rounded-lg">
                <div class="p-4">
                    <form method="GET" action="" accept-charset="UTF-8" class="flex items-center">
                        <div class="mr-2">
                            <label for="q" class="block text-gray-700">{{ __('shop.search') }}</label>
                            <input placeholder="{{ __('shop.search_text') }}" name="q" type="text" id="q"
                                   class="form-input mt-1 block w-full rounded-md">
                        </div>
                        <input type="submit" value="{{ __('shop.search') }}" class="bg-gray-500 text-white px-4 py-2 rounded mr-2">
                        <a href="{{ route('shops.index') }}" class="text-blue-500 hover:underline">{{ __('app.reset') }}</a>
                    </form>
                </div>
                <table class="min-w-full bg-white">
                    <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-200 text-center">{{ __('app.table_no') }}</th>
                        <th class="py-2 px-4 border-b border-gray-200">{{ __('shop.name') }}</th>
                        <th class="py-2 px-4 border-b border-gray-200">{{ __('shop.address') }}</th>
                        <th class="py-2 px-4 border-b border-gray-200">{{ __('shop.latitude') }}</th>
                        <th class="py-2 px-4 border-b border-gray-200">{{ __('shop.longitude') }}</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-center">{{ __('app.action') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($shops as $key => $shop)
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200 text-center">{{ $shops->firstItem() + $key }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{!! $shop->name_link !!}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $shop->address }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $shop->latitude }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $shop->longitude }}</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-center">
                                <a href="{{ route('shops.show', $shop) }}"
                                   id="show-shop-{{ $shop->id }}" class="text-blue-500 hover:underline">{{ __('app.show') }}</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="p-4">{{ $shops->appends(Request::except('page'))->render() }}</div>
            </div>
        </div>
    </div>

</x-app-layout>
