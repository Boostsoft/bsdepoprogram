<?php

namespace App\Repositories;

use App\Models\ProductBrand;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Illuminate\Http\Request;

class ProductBrandRepository extends AbstractRepository
{

    public function __construct(ProductBrand $model)
    {
        $this->model = $model;
    }

    protected function queryBuilder(array $query = NULL, $pagination = NULL)
    {
        return QueryBuilder::for(ProductBrand::class, new Request($query))
            ->allowedFilters([
                'name',
                AllowedFilter::exact('id'),
                AllowedFilter::exact('name'),
            ])
            ->defaultSort('-id')
            ->allowedSorts(['id','name']);
    }

    public function getAll()
    {
        return $this->model->all(); // Tüm markaları döndürür
    }
}
