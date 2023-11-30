<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ShopController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $shopQuery = Shop::query();
        $shopQuery->where('name', 'like', '%' . request('q') . '%');
        $shops = $shopQuery->paginate(25);

        return view('shops.index', compact('shops'));
    }

    /**
     * @return View
     * @throws AuthorizationException
     */
    public function create(): View
    {
        $this->authorize('create', new Shop);

        return view('shops.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', new Shop);

        $newShop = $request->validate([
            'name' => 'required|max:120',
            'category' => 'nullable|max:60',
            'address' => 'nullable|max:255',
            'latitude' => 'required|max:15',
            'longitude' => 'required|max:15',
        ]);
        $newShop['creator_id'] = auth()->id();

        Shop::create($newShop);

        return redirect()->route('shops.index');
    }

    /**
     * @param Shop $shop
     * @return View
     */
    public function show(Shop $shop): View
    {
        return view('shops.show', compact('shop'));
    }

    /**
     * @param Shop $shop
     * @return View
     * @throws AuthorizationException
     */
    public function edit(Shop $shop): View
    {
        $this->authorize('update', $shop);

        return view('shops.edit', compact('shop'));
    }

    /**
     * @param Request $request
     * @param Shop $shop
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function update(Request $request, Shop $shop): RedirectResponse
    {
        $this->authorize('update', $shop);

        $shopData = $request->validate([
            'name' => 'required|max:120',
            'category' => 'nullable|max:60',
            'address' => 'nullable|max:255',
            'latitude' => 'required|max:15',
            'longitude' => 'required|max:15',
        ]);
        $shop->update($shopData);

        return redirect()->route('shops.index');
    }

    /**
     * @param Request $request
     * @param Shop $shop
     * @return RedirectResponse
     * @throws AuthorizationException
     */
    public function destroy(Request $request, Shop $shop): RedirectResponse
    {
        $this->authorize('delete', $shop);

        $request->validate(['shop_id' => 'required']);

        if ($request->get('shop_id') == $shop->id && $shop->delete()) {
            return redirect()->route('shops.index');
        }

        return back();
    }
}
