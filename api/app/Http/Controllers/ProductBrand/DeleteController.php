<?php

namespace App\Http\Controllers\ProductBrand;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductBrand\DeleteRequest;
use App\Services\ProductBrandService;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(DeleteRequest $request, int $id, ProductBrandService $productBrandService)
    {
        $result = $productBrandService->deleteModelById(
            $id
        );

        return redirect()->route('admin.productBrand');

    }
}
