<?php

namespace App\Repositories;


use App\Models\Product;
use App\Models\Warehouse;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Illuminate\Http\Request;

class ProductRepository extends AbstractRepository
{

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    protected function queryBuilder(array $query = NULL, $pagination = NULL)
    {
        return QueryBuilder::for(Product::class, new Request($query))
            ->allowedFilters([
                'name',
                AllowedFilter::exact('id'),
                AllowedFilter::exact('stock_code'),
                AllowedFilter::exact('product_brand'),
                AllowedFilter::exact('part_type'),
                AllowedFilter::exact('unit'),
            ])
            ->defaultSort('-id')
            ->allowedSorts(['id','stock_code', 'name', 'product_brand', 'part_type', 'unit']);
    }
}

