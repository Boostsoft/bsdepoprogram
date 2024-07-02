<?php

namespace App\Http\Controllers\Vehicle;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Vehicle\IndexRequest;
use App\Http\Resources\VehicleResource;
use App\Services\VehicleService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(IndexRequest $request, VehicleService $vehicleService)
    {
        $result = $vehicleService->getModels(
            $request->all()
        );
        return ApiResponse::data(VehicleResource::collection($result));
    }
}
