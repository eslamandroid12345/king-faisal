<?php

namespace App\Http\Services\Api\MembershipRequest;

use App\Http\Requests\Api\MembershipRequest\MembershipRequest;
use App\Http\Traits\Response;
use App\Repository\MemberShipRequestRepositoryInterface;
use Illuminate\Http\JsonResponse;

abstract class MembershipRequestService
{

    use Response;


    public function __construct(
       private readonly MemberShipRequestRepositoryInterface $memberShipRequestRepository
    )
    {
    }

    public function subscription(MembershipRequest $request): JsonResponse
    {

        try {

            $user = auth('user-api')->user();

            if($user->membership_number != null){

                return $this->responseFail(status: 201,message: __('user.membership_active'));

            }else{

                $inputs = $request->validated();
                $inputs['user_id'] = $user->id;
                $this->memberShipRequestRepository->create($inputs);

                return $this->responseSuccess(message: __('dashboard.store'));

            }

        }catch (\Exception $e){

            return $this->responseFail(status: 500,message: __('user.server_error'));
        }
    }


}
