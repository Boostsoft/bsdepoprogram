<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserIndexRequest;
use App\Http\Resources\UserResource;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;

class IndexController extends Controller
{

    public function __invoke(UserIndexRequest $request, UserService $userService): JsonResponse
    {
        $users = $userService->getModels($request->validated());
        return ApiResponse::data(UserResource::collection($users));
    }
}
