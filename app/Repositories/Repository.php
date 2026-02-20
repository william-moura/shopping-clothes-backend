<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class Repository
{
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    protected function all(): Collection
    {
        return $this->model::all();
    }

    abstract public function convertToDto(array $collection): array;
}