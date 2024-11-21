<?php

namespace App\Http\Controllers\Api\InformationRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\InformationRequest\InformationRequest;
use App\Http\Services\Api\InformationRequest\InformationRequestService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InformationRequestController extends Controller
{

    public function __construct(
      private readonly InformationRequestService $informationRequestService
    )
    {
    }


    public function step1(InformationRequest $request): JsonResponse
    {
        return $this->informationRequestService->step1($request);
    }

    public function step2(): JsonResponse
    {
        return $this->informationRequestService->step2();
    }

    public function step3(): JsonResponse
    {
        return $this->informationRequestService->step3();
    }
    public function step4(): JsonResponse
    {
        return $this->informationRequestService->step4();
    }


    public function addOrCancel($id): JsonResponse
    {
        return $this->informationRequestService->addOrCancel($id);
    }



}
