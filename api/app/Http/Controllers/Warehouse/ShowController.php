<?php

namespace App\Http\Controllers\Warehouse;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Warehouse\ShowRequest;
use App\Http\Resources\WarehouseResource;
use App\Services\WarehouseService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(ShowRequest $request, int $id, WarehouseService  $warehouseService): JsonResponse
    {
        $order = $warehouseService->getModel(
            $id
        );

        return ApiResponse::data(new WarehouseResource($order));

    }
}
