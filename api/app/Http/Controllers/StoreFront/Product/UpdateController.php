<?php

namespace App\Http\Controllers\StoreFront\Product;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\ProductBrand;
use App\Services\ProductBrandService;
use App\Services\ProductService;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function edit(UpdateRequest $request, int $id, ProductService  $productService)
    {
        $productService->updateModel(
          $id,
          $request->validated()
        );

        return redirect('/product/edit/'.$id);

    }

    public function view(Request $request, int $id, ProductService $productService, ProductBrandService $productBrandService)
    {
        $model = $productService->getModel(
            $id
        );
        $productBrands = $productBrandService->getAllBrands();

        return view('admin.product.edit', ['product' => $model], ['productBrands' => $productBrands]);
    }
}
