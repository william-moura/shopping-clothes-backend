<?php

namespace App\Http\Controllers;

use App\Services\StoresService;
use Illuminate\Http\Request;

class StoresController extends Controller
{
    public function __invoke(Request $request, StoresService $service)
    {
        return response()->json(['data' => $service->getStores()], 200);
    }
}
