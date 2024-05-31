<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserUpdateRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UserUpdateRequest $request, int $id, UserService $userService)
    {
        $result = $userService->updateModel(
            $id,
            $request->validated()
        );

        return ApiResponse::message($result > 0 , $result > 0 ? 'USER_UPDATED' : 'USER_NOT_UPDATED');

    }
}
