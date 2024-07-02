<?php

namespace App\Http\Controllers\Vehicle;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Vehicle\UpdateRequest;
use App\Services\VehicleService;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, int $id, VehicleService $vehicleService)
    {
        $result = $vehicleService->updateModel(
            $id,
            $request->validated()
        );
        return ApiResponse::message($result > 0, $result > 0 ? 'VEHICLE_UPDATED' : 'VEHICLE_NOT_UPDATED');
    }
}
