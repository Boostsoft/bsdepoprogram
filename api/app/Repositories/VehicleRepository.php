<?php


namespace App\Repositories;


use App\Models\Vehicle;
use App\Models\Warehouse;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Illuminate\Http\Request;

class VehicleRepository extends AbstractRepository
{

    public function __construct(Vehicle $model)
    {
        $this->model = $model;
    }

    protected function queryBuilder(array $query = NULL, $pagination = NULL)
    {
        return QueryBuilder::for(Vehicle::class, new Request($query))
            ->allowedFilters([
                'plate',
                AllowedFilter::exact('id'),
                AllowedFilter::exact('chassis'),
                AllowedFilter::exact('segment'),
                AllowedFilter::exact('brand'),
                AllowedFilter::exact('model'),
                AllowedFilter::exact('fuel_type'),
                AllowedFilter::exact('transmission_type'),
                AllowedFilter::exact('registration_no'),
                AllowedFilter::exact('color'),
                AllowedFilter::exact('inspection_date'),
                AllowedFilter::exact('customer_type'),
                AllowedFilter::exact('customer'),
                AllowedFilter::exact('license'),
            ])
            ->defaultSort('-id')
            ->allowedSorts(['id', 'plate', 'chassis', 'segment', 'brand', 'model', 'fuel_type',
                'transmission_type', 'registration_no', 'color', 'inspection_date', 'customer_type',
                'customer', 'license']);
    }
}
