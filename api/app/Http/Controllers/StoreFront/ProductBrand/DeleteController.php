<?php

namespace App\Http\Controllers\StoreFront\ProductBrand;

use App\Http\Controllers\Controller;
use App\Services\ProductBrandService;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete(Request $request, ProductBrandService $productBrandService)
    {
        $ids = $request->input('ids', []);

        if (!is_array($ids)) {
            $ids = [$ids];
        }

        foreach ($ids as $id) {
            $productBrandService->deleteModelById($id);
        }

        return redirect()->route('product-brand.list');
    }
}
