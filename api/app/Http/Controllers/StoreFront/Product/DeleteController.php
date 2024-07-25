<?php

namespace App\Http\Controllers\StoreFront\Product;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete(Request $request, ProductService $productService)
    {
        $ids = $request->input('ids', []);

        if (!is_array($ids)) {
            $ids = [$ids];
        }

        foreach ($ids as $id) {
            $productService->deleteModelById($id);
        }

        return redirect()->route('product.list');
    }
}
