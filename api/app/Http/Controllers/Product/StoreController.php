<?php

namespace App\Http\Controllers\Product;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Resources\ProductResource;
use App\Services\ProductService;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, ProductService  $productService)
    {
        $result = $productService->storeModel(
            $request->validated()
        );

        return ApiResponse::message(true, 'PRODUCT CREATED!', new ProductResource($result));
    }
}
