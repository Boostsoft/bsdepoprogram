<?php

namespace App\Http\Controllers\Shelf;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Shelf\StoreRequest;
use App\Http\Resources\ShelfResource;
use App\Services\ShelfService;
use Illuminate\Http\JsonResponse;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, ShelfService $shelfService): JsonResponse
    {
        $result = $shelfService->storeModel(
            $request->validated()
        );

        return ApiResponse::message(true, 'SHELF_CREATED', new ShelfResource($result));

    }
}
