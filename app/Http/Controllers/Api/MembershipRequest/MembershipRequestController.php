<?php

namespace App\Http\Controllers\Api\MembershipRequest;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\MembershipRequest\MembershipRequest;
use App\Http\Services\Api\MembershipRequest\MembershipRequestService;

class MembershipRequestController extends Controller
{
    protected MembershipRequestService $membershipRequestService;

    public function __construct(MembershipRequestService $membershipRequestService)
    {
        $this->membershipRequestService = $membershipRequestService;
    }

    public function subscription(MembershipRequest $request)
    {

        return $this->membershipRequestService->subscription($request);
    }
}
