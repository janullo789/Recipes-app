<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ShopMapController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('shops.map');
    }
}
