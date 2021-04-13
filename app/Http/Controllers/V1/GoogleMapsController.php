<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;

class GoogleMapsController extends Controller
{
    public function getKey()
    {
        return response()->json([
            'key' => env('GOOGLE_MAPS_KEY')
        ]);
    }
}
