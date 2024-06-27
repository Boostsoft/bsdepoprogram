<?php

namespace App\Http\Controllers\Customer;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\IndexRequest;
use App\Http\Resources\CustomerResource;
use App\Services\CustomerService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(IndexRequest $request, CustomerService $customerService)
    {
        $result = $customerService->getModels(
            $request->all()
        );

        return ApiResponse::data(CustomerResource::collection($result));

    }
}
