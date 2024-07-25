<?php

namespace App\Services;


use App\Repositories\ProductBrandRepository;

class ProductBrandService extends AbstractService
{
    public function __construct(ProductBrandRepository $repository)
    {
        $this->repository = $repository;
        $this->modelName = 'ProductBrand';
    }
    public function getAllBrands()
    {
        return $this->repository->getAll(); // Markaları repository'den alır
    }
}
