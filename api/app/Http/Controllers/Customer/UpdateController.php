<?php

namespace App\Http\Controllers\Customer;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\UpdateRequest;
use App\Services\CustomerService;
use Illuminate\Http\JsonResponse;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, int $id, CustomerService  $customerService): JsonResponse
    {
        $result = $customerService->updateModel(
            $id,
            $request->validated()
        );

        return ApiResponse::message($result > 0 , $result > 0 ? 'CUSTOMER_UPDATED' : 'CUSTOMER_NOT_UPDATED');

    }
}
