<?php

namespace App\Http\Controllers\Api;

use App\Models\Shop;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\Shop as ShopResource;

class ShopController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
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
