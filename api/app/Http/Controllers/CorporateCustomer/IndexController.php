<?php

namespace App\Http\Controllers\CorporateCustomer;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\CorporateCustomer\IndexRequest;
use App\Http\Resources\CorporateCustomerResource;
use App\Services\CorporateCustomerService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(IndexRequest $request, CorporateCustomerService  $corporateCustomerService)
    {
        $result = $corporateCustomerService->getModels(
            $request->all()
        );

        return ApiResponse::data(CorporateCustomerResource::collection($result));

    }
}
