<?php

namespace App\Http\Controllers\Warehouse;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Warehouse\UpdateRequest;
use App\Services\WarehouseService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, int $id, WarehouseService $warehouseService)
    {
        $result = $warehouseService->updateModel(
            $id,
            $request->validated()
        );

        return ApiResponse::message($result > 0 , $result > 0 ? 'WAREHOUSE UPDATED' : 'ERROR WAREHOUSE NOT UPDATED');

    }
}
