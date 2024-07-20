<?php

namespace App\Http\Controllers\StoreFront\ProductBrand;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductBrand\StoreRequest;
use App\Http\Resources\ProductBrandResource;
use App\Models\ProductBrand;
use App\Services\ProductBrandService;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function add(StoreRequest $request, ProductBrandService $productBrandService)
    {
        /** @var ProductBrand $model */
        $model = $productBrandService->storeModel(
            $request->validated()
        );

        return redirect('/product-brand/edit/'.$model->getAttribute('id'));
    }

    public function view(Request $request)
    {
        return view('admin.product-brand.add');
    }
}
