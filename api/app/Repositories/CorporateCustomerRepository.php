<?php

namespace App\Repositories;

use App\Models\CorporateCustomer;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Illuminate\Http\Request;

class CorporateCustomerRepository extends AbstractRepository
{

    public function __construct(CorporateCustomer $model)
    {
        $this->model = $model;
    }

    protected function queryBuilder(array $query = NULL, $pagination = NULL)
    {
        return QueryBuilder::for(CorporateCustomer::class, new Request($query))
            ->allowedFilters([
                'company_name',
                AllowedFilter::exact('id'),
                AllowedFilter::exact('company_name'),
            ])
            ->defaultSort('-id')
            ->allowedSorts(['id','company_name']);
    }
}
