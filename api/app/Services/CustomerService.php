<?php

namespace App\Services;


use App\Repositories\CustomerRepository;

class CustomerService extends AbstractService
{
    public function __construct(CustomerRepository $repository)
    {
        $this->repository = $repository;
        $this->modelName = 'Customer';
    }
}
