<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        //$this->authorize('manage_shop');
        $shopQuery = Shop::query();
        $shopQuery->where('name', 'like', '%'.request('q').'%');
        $shops = $shopQuery->paginate(25);

        return view('shops.index', compact('shops'));
    }

    public function create()
    {
        $this->authorize('create', new Shop);

        return view('shops.create');
    }

    public function store(Request $request)
    {
        $this->authorize('create', new Shop);

        $newShop = $request->validate([
            'name'      => 'required|max:120',
            'category'  => 'nullable|max:60',
            'address'   => 'nullable|max:255',
            'latitude'  => 'required|max:10',
            'longitude' => 'required|max:11',
        ]);
        $newShop['creator_id'] = auth()->id();

        $shop = Shop::create($newShop);

        return redirect()->route('shops.show', $shop);
    }

    public function show(Shop $shop)
    {
        return view('shops.show', compact('shop'));
    }

    public function edit(Shop $shop)
    {
        $this->authorize('update', $shop);

        return view('shops.edit', compact('shop'));
    }

    public function update(Request $request, Shop $shop)
    {
        $this->authorize('update', $shop);

        $shopData = $request->validate([
            'name'      => 'required|max:120',
            'category'  => 'nullable|max:60',
            'address'   => 'nullable|max:255',
            'latitude'  => 'required|max:10',
            'longitude' => 'required|max:11',
        ]);
        $shop->update($shopData);

        return redirect()->route('shops.show', $shop);
    }


    public function destroy(Request $request, Shop $shop)
    {
        $this->authorize('delete', $shop);

        $request->validate(['shop_id' => 'required']);

        if ($request->get('shop_id') == $shop->id && $shop->delete()) {
            return redirect()->route('shops.index');
        }

        return back();
    }
}
