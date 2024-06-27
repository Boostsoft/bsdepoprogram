<?php

namespace App\Http\Controllers\Customer;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\StoreRequest;
use App\Http\Resources\CustomerResource;
use App\Services\CustomerService;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, CustomerService $customerService)
    {
        $result = $customerService->storeModel(
            $request->validated()
        );

        return ApiResponse::message(true, 'CUSTOMER_CREATED', new CustomerResource($result));

    }
}
