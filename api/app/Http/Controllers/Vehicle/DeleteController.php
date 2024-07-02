<?php

namespace App\Http\Controllers\Vehicle;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Vehicle\DeleteRequest;
use App\Services\VehicleService;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(DeleteRequest $deleteRequest, int $id, VehicleService $vehicleService)
    {
        $result = $vehicleService->deleteModelById(
            $id
        );
        return ApiResponse::message($result > 0 , $result > 0 ? 'VEHICLE_DELETED' : 'VEHICLE_NOT_FOUND');
    }
}
