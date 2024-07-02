<?php


namespace App\Services;

use App\Repositories\VehicleRepository;


class VehicleService extends AbstractService
{
    public function __construct(VehicleRepository $repository)
    {
        $this->repository = $repository;
        $this->modelName = 'Vehicle';
    }
}
