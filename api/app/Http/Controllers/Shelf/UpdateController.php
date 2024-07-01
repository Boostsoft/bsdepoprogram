<?php

namespace App\Http\Controllers\Shelf;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Shelf\UpdateRequest;
use App\Services\ShelfService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, int $id, ShelfService  $shelfService): JsonResponse
    {
        $result = $shelfService->updateModel(
            $id,
            $request->validated()
        );

        return ApiResponse::message($result > 0 , $result > 0 ? 'SHELF UPDATED' : 'SHELF NOT UPDATED');
    }
}
