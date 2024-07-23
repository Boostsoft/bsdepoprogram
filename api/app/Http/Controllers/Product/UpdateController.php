<?php

namespace App\Http\Controllers\Product;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Services\ProductService;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, int $id, ProductService $productService)
    {
        $result = $productService->updateModel(
            $id,
            $request->validated()
        );

        return ApiResponse::message($result > 0 , $result > 0 ? 'PRODUCT UPDATED' : 'ERROR UPDATING');
    }
}
