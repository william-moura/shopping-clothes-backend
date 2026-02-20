<?php

namespace App\Repositories;

use App\Contracts\Repositories\StoresRepositoryInterface;
use App\DataTransferObjects\StoresDto;
use App\Models\Store;

class StoreRepository extends Repository implements StoresRepositoryInterface
{
    public function __construct(Store $store)
    {
        parent::__construct($store);
    }
    public function getStores(): array
    {
        return $this->convertToDto($this->all()->toArray());
    }

    public function convertToDto(array $collection): array
    {
        return array_map(function ($store) {
            return new StoresDto(
                $store['social_reason'],
                $store['fantasy_name'],
                $store['cnpj'],
                $store['email'],
                $store['phone'],
                $store['picture']
            );
        }, $collection);
    }
}