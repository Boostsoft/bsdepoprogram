<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserDeleteRequest;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(UserDeleteRequest $request, int $id, UserService $userService): JsonResponse
    {
        $result = $userService->deleteModelById(
            $id
        );

        return  ApiResponse::message($result > 0, $result > 0 ? 'USER' : 'USER_NOT_DELETED');

    }
}
