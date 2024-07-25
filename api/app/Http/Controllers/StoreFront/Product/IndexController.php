<?php

namespace App\Http\Controllers\StoreFront\Product;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\IndexRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\JsonResponse;


class IndexController extends Controller
{
    public function list(IndexRequest $request, ProductService $productService)
    {
        $result = $productService->getModels(
            $request->all()
        );
        return view('admin.product.list', ['products' => $result]); // Veriyi view'e gönder
    }
}
