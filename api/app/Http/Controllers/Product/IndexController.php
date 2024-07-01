<?php

namespace App\Http\Controllers\Product;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\IndexRequest;
use App\Http\Resources\ProductResource;
use App\Services\ProductService;

class IndexController extends Controller
{
    public function __invoke(IndexRequest $request, ProductService $productService)
    {
        $result = $productService->getModels(
            $request->all()
        );
        return ApiResponse::data(ProductResource::collection($result));
    }
}
