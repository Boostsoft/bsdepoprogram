<?php

namespace App\Http\Controllers\Shelf;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Shelf\IndexRequest;
use App\Http\Resources\ShelfResource;
use App\Services\ShelfService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(IndexRequest $request, ShelfService  $shelfService)
    {
        $result = $shelfService->getModels(
            $request->all()
        );

        return ApiResponse::data(ShelfResource::collection($result));
    }
}
