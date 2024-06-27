<?php

namespace App\Services;

use App\Repositories\CorporateCustomerRepository;

class CorporateCustomerService extends AbstractService
{
    public function __construct(CorporateCustomerRepository $repository)
    {
        $this->repository = $repository;
        $this->modelName = 'corporateCustomer';
    }
}
