<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\AuthResource;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request, AuthService $autService): JsonResponse
    {
        $token = $autService->login($request->validated());

        return ApiResponse::data([
            'data' => new AuthResource($autService->getAuthUser()),
            'access_token' => $token,
            'type' => 'Bearer'
        ]);
    }
}
