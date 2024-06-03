<?php

namespace App\Http\Controllers\ProductBrand;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductBrand\StoreRequest;
use App\Http\Resources\ProductBrandResource;
use App\Services\ProductBrandService;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, ProductBrandService $productBrandService)
    {
        $result = $productBrandService->storeModel(
            $request->validated()
        );

        return ApiResponse::message(true, 'PRODUCT_BRAND_CREATED', new ProductBrandResource($result));

    }
}
