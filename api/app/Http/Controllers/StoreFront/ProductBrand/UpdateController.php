<?php

namespace App\Http\Controllers\StoreFront\ProductBrand;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductBrand\UpdateRequest;
use App\Models\ProductBrand;
use App\Services\ProductBrandService;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function edit(UpdateRequest $request, int $id, ProductBrandService  $productBrandService)
    {
        $productBrandService->updateModel(
          $id,
          $request->validated()
        );

        return redirect('/product-brand/edit/'.$id);

    }

    public function view(Request $request, int $id, ProductBrandService $productBrandService)
    {
        $model = $productBrandService->getModel(
            $id
        );

        return view('admin.product-brand.edit', ['brand' => $model]);
    }
}
