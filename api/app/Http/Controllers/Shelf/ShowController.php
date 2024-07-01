<?php

namespace App\Http\Controllers\Shelf;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Shelf\ShowRequest;
use App\Http\Resources\ShelfResource;
use App\Services\ShelfService;
use Illuminate\Http\JsonResponse;

class ShowController extends Controller
{
    public function __invoke(ShowRequest $request, int $id, ShelfService $shelfService): JsonResponse
    {
        $order = $shelfService->getModel(
            $id
        );

        return ApiResponse::data(new ShelfResource($order));
    }
}
