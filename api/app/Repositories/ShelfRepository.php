<?php

namespace App\Repositories;


use App\Models\Shelf;
use App\Models\Warehouse;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Illuminate\Http\Request;

class ShelfRepository extends AbstractRepository
{

    public function __construct(Shelf $model)
    {
        $this->model = $model;
    }

    protected function queryBuilder(array $query = NULL, $pagination = NULL)
    {
        return QueryBuilder::for(Shelf::class, new Request($query))
            ->allowedFilters([
                'name',
                AllowedFilter::exact('id'),
                AllowedFilter::exact('warehouse_name'),
                AllowedFilter::exact('block'),
                AllowedFilter::exact('shelf'),
            ])
            ->defaultSort('-id')
            ->allowedSorts(['id','warehouse_name', 'block', 'shelf']);
    }
}

