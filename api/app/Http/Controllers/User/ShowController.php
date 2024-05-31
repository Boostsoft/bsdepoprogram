<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserShowRequest;
use App\Http\Resources\UserResource;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(UserShowRequest $request, int $id, UserService $userService): JsonResponse
    {
        $user = $userService->getModel(
            $id
        );

        return ApiResponse::data(new UserResource($user));
    }
}
