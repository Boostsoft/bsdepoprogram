<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService extends AbstractService
{
    protected $repository;
    protected $modelName = 'user';

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }
}

