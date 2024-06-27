<?php

namespace App\Http\Controllers\CorporateCustomer;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\CorporateCustomer\UpdateRequest;
use App\Services\CorporateCustomerService;
use Illuminate\Http\JsonResponse;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, int $id, CorporateCustomerService $corporateCustomerService): JsonResponse
    {
        $result = $corporateCustomerService->updateModel(
            $id,
            $request->validated()
        );

        return ApiResponse::message($result > 0 , $result > 0 ? 'CORPORATE_CUSTOMER_UPDATED' : 'CORPORATE_CUSTOMER_NOT_UPDATED');

    }
}
