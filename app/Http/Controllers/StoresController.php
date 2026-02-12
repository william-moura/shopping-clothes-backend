<?php

namespace App\Http\Controllers;

use App\StoresService;
use Illuminate\Http\Request;

class StoresController extends Controller
{
    private StoresService $service;

    /**
     * Summary of __construct
     * @param StoresService $service
     */
    public function __construct(StoresService $service)
    {
        $this->service = $service;
    }

    public function __invoke()
    {
        return $this->service->getStores();
    }
}
