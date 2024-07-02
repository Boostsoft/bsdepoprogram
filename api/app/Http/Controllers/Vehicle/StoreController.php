<?php

namespace App\Http\Controllers\Vehicle;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Vehicle\StoreRequest;
use App\Http\Resources\VehicleResource;
use App\Services\VehicleService;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, VehicleService  $vehicleService)
    {
        $result = $vehicleService->storeModel(
            $request->validated()
        );

        return ApiResponse::message(true, 'VEHICLE_CREATED', new VehicleResource($result));
    }
}
