<?php

namespace App\Http\Controllers\Api;

use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Shop as ShopResource;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $shops = Shop::all();

        $geoJSONdata = $shops->map(function ($shop) {
            return [
                'type'       => 'Feature',
                'properties' => new ShopResource($shop),
                'geometry'   => [
                    'type'        => 'Point',
                    'coordinates' => [
                        $shop->longitude,
                        $shop->latitude,
                    ],
                ],
            ];
        });

        return response()->json([
            'type'     => 'FeatureCollection',
            'features' => $geoJSONdata,
        ]);
    }
}
