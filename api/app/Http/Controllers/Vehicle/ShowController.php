<?php

namespace App\Http\Controllers\Vehicle;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Vehicle\ShowRequest;
use App\Http\Resources\VehicleResource;
use App\Services\VehicleService;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(ShowRequest $request, int $id, VehicleService $vehicleService)
    {
        $order = $vehicleService->getModel(
            $id
        );

        return ApiResponse::data(new VehicleResource($order));
    }
}
