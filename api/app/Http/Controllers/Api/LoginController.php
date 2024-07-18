<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\AuthResource;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
    public function __invoke(LoginRequest $request, AuthService $autService): JsonResponse
    {
        $token = $autService->login($request->validated());

        return ApiResponse::data([
            'data' => new AuthResource($autService->getAuthUser()),
            'access_token' => $token,
            'type' => 'Bearer'
        ]);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        try {
            $token = $this->authService->login($credentials);

            if ($token) {
                return redirect()->route('admin.index');
            } else {
                return back()->withErrors(['email' => 'Giriş başarısız. Lütfen bilgilerinizi kontrol edin.']);
            }
        } catch (Exception $e) {
            return back()->withErrors(['email' => $e->getMessage()]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
