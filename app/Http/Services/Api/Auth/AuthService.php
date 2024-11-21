<?php

namespace App\Http\Services\Api\Auth;
use App\Http\Requests\Api\Auth\AuthRequest;
use App\Http\Requests\Api\User\StoreUserRequest;
use App\Http\Requests\Api\User\UpdateUserRequest;
use App\Http\Resources\User\UserResource;
use App\Http\Traits\Response;
use App\Repository\InformationRequestRepositoryInterface;
use App\Repository\UserRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

abstract class AuthService
{

    use Response;

    public function __construct(
        private readonly UserRepositoryInterface $userRepository,
        private readonly InformationRequestRepositoryInterface $informationRequestRepository
    )
    {
    }

    public function register(StoreUserRequest $request): JsonResponse
    {

        DB::beginTransaction();

        try {

            $data = $request->validated();
            $data['password'] = Hash::make($request->password);

            $user = $this->userRepository->create($data);

            $token = Auth::guard('user-api')->attempt($request->only('phone', 'password'));
            $user['token'] = $token;

            DB::commit();

            return $this->responseSuccess(message: __('user.add_success'), data: new UserResource($user));

        } catch (\Exception $exception) {
            DB::rollBack();
            return $this->responseFail(status: 500);
        }

    }

    public function login(AuthRequest $request): JsonResponse
    {

        try {
            $token = auth('user-api')->attempt($request->only('email', 'password'));

            if (!$token) {
                return $this->responseFail(status: 401,message: __('user.login_failed'));
            }

            $auth = Auth::guard('user-api')->user();

            $auth['token'] = $token;

            return $this->responseSuccess(message: __('user.login_success'), data: new UserResource($auth));
        } catch (\Exception $exception) {
            return $this->responseFail(500);
        }

    }



    public function getProfile(Request $request): JsonResponse
    {

        $auth = Auth::guard('user-api')->user();
        $auth['token'] = $request->bearerToken();

        return $this->responseSuccess(message: __('user.show_success'), data: new UserResource($auth));

    }

    public function updateProfile(UpdateUserRequest $request): JsonResponse
    {

        DB::beginTransaction();

        try {

            $data = $request->validated();

            if ($request->filled('password')) {
                $data['password'] = Hash::make($data['password']);
            } else {
                unset($data['password']);
            }

            $user = auth('user-api')->user();
            $user['token'] = $request->bearerToken();

            $this->userRepository->update(auth('user-api')->id(),$data);

            DB::commit();

            return $this->responseSuccess(message: __('user.update_success'), data: new UserResource($user));

        } catch (\Exception $exception) {
            DB::rollBack();
            return $this->responseFail(500);
        }
    }

    public function logout(): JsonResponse
    {
        auth('user-api')->logout();
        return $this->responseSuccess(message: __('user.logout_success'));

    }

}
