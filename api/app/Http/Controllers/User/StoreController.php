<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserStoreRequest;
use App\Http\Resources\UserResource;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;

class StoreController extends Controller
{

    public function __invoke(UserStoreRequest $request, UserService $userService): JsonResponse
    {
        $result = $userService->storeModel($request->validated());
        return ApiResponse::message(true, 'USER_CREATED', new UserResource($result));
    }
}
