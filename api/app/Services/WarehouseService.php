<?php

namespace App\Services;

use App\Repositories\WarehouseRepository;

class WarehouseService extends AbstractService
{
    public function __construct(WarehouseRepository $repository)
    {
        $this->repository = $repository;
        $this->modelName = 'Warehouse';
    }
}
