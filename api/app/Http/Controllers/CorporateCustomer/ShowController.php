<?php

namespace App\Http\Controllers\CorporateCustomer;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\CorporateCustomer\ShowRequest;
use App\Http\Resources\CorporateCustomerResource;
use App\Services\CorporateCustomerService;
use Illuminate\Http\JsonResponse;

class ShowController extends Controller
{
    public function __invoke(ShowRequest $request, int $id, CorporateCustomerService $corporateCustomerService): JsonResponse
    {
        $order = $corporateCustomerService->getModel(
            $id
        );

        return ApiResponse::data(new CorporateCustomerResource($order));

    }
}
