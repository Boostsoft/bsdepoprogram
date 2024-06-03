<?php

namespace App\Repositories;


use App\Models\Warehouse;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Illuminate\Http\Request;

class WarehouseRepository extends AbstractRepository
{

    public function __construct(Warehouse $model)
    {
        $this->model = $model;
    }

    protected function queryBuilder(array $query = NULL, $pagination = NULL)
    {
        return QueryBuilder::for(Warehouse::class, new Request($query))
            ->allowedFilters([
                'name',
                AllowedFilter::exact('id'),
                AllowedFilter::exact('city'),
                AllowedFilter::exact('district'),
                AllowedFilter::exact('square_meters'),
            ])
            ->defaultSort('-id')
            ->allowedSorts(['id','name', 'city', 'district', 'square_meters']);
    }
}
