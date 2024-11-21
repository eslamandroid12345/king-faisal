<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\AuthRequest;
use App\Http\Requests\Api\User\StoreUserRequest;
use App\Http\Requests\Api\User\UpdateUserRequest;
use App\Http\Services\Api\Auth\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{


    protected AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function register(StoreUserRequest $request): JsonResponse
    {

        return $this->authService->register($request);
    }


    public function login(AuthRequest $request): JsonResponse
    {

        return $this->authService->login($request);

    }

    public function getProfile(Request $request): JsonResponse
    {

        return $this->authService->getProfile($request);

    }


    public function updateProfile(UpdateUserRequest $request): JsonResponse
    {

        return $this->authService->updateProfile($request);

    }

    public function logout(): JsonResponse
    {

        return $this->authService->logout();

    }

}
