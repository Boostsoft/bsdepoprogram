<?php

namespace App\Http\Controllers\Product;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ShowRequest;
use App\Http\Resources\ProductResource;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(ShowRequest $request, int $id, ProductService  $productService)
    {
        $order = $productService->getModel(
            $id
        );

        return ApiResponse::data(new ProductResource($order));
    }
}
