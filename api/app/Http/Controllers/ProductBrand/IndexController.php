<?php

namespace App\Http\Controllers\ProductBrand;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductBrand\IndexRequest;
use App\Http\Resources\ProductBrandResource;
use App\Services\ProductBrandService;
use Illuminate\Http\JsonResponse;


class IndexController extends Controller
{
    public function __invoke(IndexRequest $request, ProductBrandService $productBrandService): JsonResponse
    {
        $result = $productBrandService->getModels(
            $request->all()
        );
        return ApiResponse::data(ProductBrandResource::collection($result));
    }

}
