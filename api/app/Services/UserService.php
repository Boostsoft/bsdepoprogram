<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService extends AbstractService
{

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
        $this->modelName = 'user';

    }

}

