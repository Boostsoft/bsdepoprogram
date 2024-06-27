<?php

namespace App\Http\Controllers\Warehouse;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Warehouse\IndexRequest;
use App\Http\Resources\WarehouseResource;
use App\Services\WarehouseService;
use Illuminate\Http\JsonResponse;

class IndexController extends Controller
{
    public function __invoke(IndexRequest $request, WarehouseService  $warehouseService): JsonResponse
    {
        $result = $warehouseService->getModels(
            $request->all()
        );

        return ApiResponse::data(WarehouseResource::collection($result));

    }
}
