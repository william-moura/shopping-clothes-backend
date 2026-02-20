<?php

namespace App\Services;

use App\Contracts\Repositories\StoresRepositoryInterface;

class StoresService
{
    private StoresRepositoryInterface $repository;
    /**
     * Create a new class instance.
     */
    public function __construct(StoresRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getStores()
    {
        return $this->repository->getStores();
    }
}
