<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopMapController extends Controller
{
    public function index(Request $request)
    {
        return view('shops.map');
    }
}
