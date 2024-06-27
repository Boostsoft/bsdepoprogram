<?php

namespace App\Http\Controllers\Warehouse;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Warehouse\DeleteRequest;
use App\Services\WarehouseService;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(DeleteRequest $request, int $id, WarehouseService  $warehouseService)
    {
        $result = $warehouseService->deleteModelById(
            $id
        );

        return ApiResponse::message($result > 0, $result > 0 ? 'WAREHOUSE_DELETED' : 'ERROR_DELETE');

    }
}
