<?php

namespace App\Http\Controllers\Api\SurveyRequest;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\SurveyRequest\ChooseReferencePagesRequest;
use App\Http\Requests\Api\SurveyRequest\ChooseReferenceRequest;
use App\Http\Requests\Api\SurveyRequest\SurveyRequest;
use App\Http\Services\Api\SurveyRequest\SurveyRequestService;
use Illuminate\Http\JsonResponse;

class SurveyRequestController extends Controller
{
    protected SurveyRequestService $surveyRequestService;

    public function __construct(SurveyRequestService $surveyRequestService)
    {

        $this->surveyRequestService = $surveyRequestService;
    }


    public function checkStep(): JsonResponse
    {

        return $this->surveyRequestService->checkStep();
    }


    public function step1(SurveyRequest $request): JsonResponse
    {

        return $this->surveyRequestService->step1($request);

    }

    public function step2(): JsonResponse
    {

        return $this->surveyRequestService->step2();

    }


    public function references(): JsonResponse
    {

        return $this->surveyRequestService->references();

    }


    public function step3(ChooseReferenceRequest $request): JsonResponse
    {
        return $this->surveyRequestService->step3($request);

    }

    public function referencesChoose(): JsonResponse
    {

        return $this->surveyRequestService->referencesChoose();

    }


    public function step4(ChooseReferencePagesRequest $request): JsonResponse
    {

        return $this->surveyRequestService->step4($request);

    }


}
