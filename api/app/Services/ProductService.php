<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use App\Repositories\WarehouseRepository;

class ProductService extends AbstractService
{
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
        $this->modelName = 'Product';
    }
}

