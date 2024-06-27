<?php

namespace App\Repositories;

use App\Models\Customer;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

class CustomerRepository extends AbstractRepository
{
    public function __construct(Customer $model)
    {
        $this->model = $model;
    }

    protected function queryBuilder(array $query = NULL, $pagination = NULL)
    {
        return QueryBuilder::for(Customer::class, new Request($query))
            ->allowedFilters([
                'name',
                AllowedFilter::exact('id'),
                AllowedFilter::exact('name'),
            ])
            ->allowedSorts(['-id'])
            ->allowedSorts(['id', 'name']);
    }
}
