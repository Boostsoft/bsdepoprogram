<?php

namespace App\Http\Controllers\StoreFront\ProductBrand;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductBrand\IndexRequest;
use App\Http\Resources\ProductBrandResource;
use App\Models\ProductBrand;
use App\Services\ProductBrandService;
use Illuminate\Http\JsonResponse;


class IndexController extends Controller
{
    public function list(IndexRequest $request, ProductBrandService $productBrandService)
    {
        $result = $productBrandService->getModels(
            $request->all()
        );
        return view('admin.product-brand.list', ['brands' => $result]); // Veriyi view'e gönder
    }
}
