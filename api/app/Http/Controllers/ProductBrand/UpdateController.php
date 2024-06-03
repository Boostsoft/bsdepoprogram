<?php

namespace App\Http\Controllers\ProductBrand;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductBrand\UpdateRequest;
use App\Models\ProductBrand;
use App\Services\ProductBrandService;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, int $id, ProductBrandService  $productBrandService)
    {
        $result = $productBrandService->updateModel(
          $id,
          $request->validated()
        );

        return ApiResponse::message($result > 0, $result > 0 ? 'PRODUCT_BRAND_UPDATED' : 'PRODUCT_BRAND_NOT_UPDATED');

    }
}
