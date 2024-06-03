<?php

namespace App\Http\Controllers\ProductBrand;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductBrand\ShowRequest;
use App\Http\Resources\ProductBrandResource;
use App\Services\ProductBrandService;
use Illuminate\Http\JsonResponse;

class ShowController extends Controller
{
    public function __invoke(ShowRequest $request, int $id, ProductBrandService $productBrandService): JsonResponse
    {
        $order = $productBrandService->getModel(
          $id
        );

        return ApiResponse::data(new ProductBrandResource($order));

    }
}
