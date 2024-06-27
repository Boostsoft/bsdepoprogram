<?php

namespace App\Http\Controllers\CorporateCustomer;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\CorporateCustomer\StoreRequest;
use App\Http\Resources\CorporateCustomerResource;
use App\Services\CorporateCustomerService;
use Illuminate\Http\JsonResponse;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, CorporateCustomerService $corporateCustomerService): JsonResponse
    {
        $result = $corporateCustomerService->storeModel(
            $request->validated()
        );

        return ApiResponse::message(true, 'CORPORATE_CREATED', new CorporateCustomerResource($result));

    }
}
