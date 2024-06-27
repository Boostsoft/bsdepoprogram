<?php

namespace App\Http\Controllers\Warehouse;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Warehouse\StoreRequest;
use App\Http\Resources\WarehouseResource;
use App\Services\WarehouseService;
use Illuminate\Http\JsonResponse;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, WarehouseService  $warehouseService): JsonResponse
    {
        $result = $warehouseService->storeModel(
            $request->validated()
        );

        return ApiResponse::message(true, 'WAREHOUSE_CREATED', new WarehouseResource($result));

    }
}
