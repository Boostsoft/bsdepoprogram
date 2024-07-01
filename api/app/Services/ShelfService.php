<?php

namespace App\Services;

use App\Repositories\ShelfRepository;
use App\Repositories\WarehouseRepository;

class ShelfService extends AbstractService
{
    public function __construct(ShelfRepository $repository)
    {
        $this->repository = $repository;
        $this->modelName = 'Shelf';
    }
}

