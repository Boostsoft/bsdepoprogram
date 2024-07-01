<?php

namespace App\Http\Controllers\Product;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\DeleteRequest;
use App\Services\ProductService;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(DeleteRequest $request, int $id, ProductService $productService)
    {
        $result = $productService->deleteModelById(
            $id
        );

        return ApiResponse::message($result > 0 , $result > 0 ? 'PRODUCT_DELETED_SUCCESSFULLY' : 'PRODUCT_NOT_DELETED');
    }
}
