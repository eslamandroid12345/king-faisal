<?php

namespace App\Http\Services\Api\SurveyRequest;

use App\Http\Requests\Api\SurveyRequest\ChooseReferencePagesRequest;
use App\Http\Requests\Api\SurveyRequest\ChooseReferenceRequest;
use App\Http\Requests\Api\SurveyRequest\SurveyRequest;
use App\Http\Resources\InformationRequest\CheckStepUserResource;
use App\Http\Resources\SurveyRequest\ChooseReferenceResource;
use App\Http\Resources\SurveyRequest\ReferencePagesResource;
use App\Http\Services\Mutual\GetService;
use App\Http\Traits\Response;
use App\Repository\ReferenceRepositoryInterface;
use App\Repository\ReferenceUserChooseRepositoryInterface;
use App\Repository\SurveyRequestRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

abstract class SurveyRequestService
{

    use Response;

    public function __construct(
       private readonly GetService $getService,
       private readonly SurveyRequestRepositoryInterface $surveyRequestRepository,
       private readonly ReferenceRepositoryInterface $referenceRepository,
       private readonly ReferenceUserChooseRepositoryInterface $referenceUserChooseRepository
    )
    {
    }

    public function checkStep(): JsonResponse
    {
        try {
            $surveyRequest = $this->surveyRequestRepository->first('user_id', auth('user-api')->id());

            if (is_null($surveyRequest)) {
                return $this->createStepResponse(1, __('messages.first_step'));
            }

            if ($this->isFirstStep($surveyRequest)) {
                return $this->createStepResponse(1, __('messages.first_step'));
            }

            if ($this->isSecondStep($surveyRequest)) {
                return $this->createStepResponse(2, __('messages.second_step'));
            }

            if ($this->isThirdStep($surveyRequest)) {
                return $this->createStepResponse(3, __('messages.third_step'));
            }

            if ($this->isFourthStep($surveyRequest)) {
                return $this->createStepResponse(4, __('messages.fourth_step'));
            }


            if ($this->isFiveStep($surveyRequest)) {
                return $this->createStepResponse(5, __('messages.five_step'));
            }

            return $this->createStepResponse(1, __('messages.first_step'));

        } catch (\Exception $exception) {
            return $this->responseFail(status: 500, message: $exception->getMessage());
        }
    }

    private function isFirstStep($surveyRequest): bool
    {
        return $surveyRequest->is_payment == 1 || $surveyRequest->is_declined == 1;
    }


    private function isSecondStep($surveyRequest): bool
    {
        return $surveyRequest->is_confirmed == 0;
    }


    private function isThirdStep($surveyRequest): bool
    {
        return $surveyRequest->is_confirmed == 1 && $surveyRequest->is_references_choose == 0;
    }


    private function isFourthStep($surveyRequest): bool
    {
        return $surveyRequest->is_confirmed == 1 && $surveyRequest->is_references_choose == 1  && $surveyRequest->is_payment_ready == 0;
    }

    private function isFiveStep($surveyRequest): bool
    {
        return $surveyRequest->is_confirmed == 1 && $surveyRequest->is_references_choose == 1  && $surveyRequest->is_payment_ready == 1;

    }

    private function createStepResponse(int $step, string $message): JsonResponse
    {
        $stepData = ['step' => $step];
        return $this->responseSuccess(message: $message, data: new CheckStepUserResource($stepData));
    }

    public function step1(SurveyRequest $request): JsonResponse
    {

        try {

            $surveyRequest = $this->surveyRequestRepository->first('user_id', auth('user-api')->id());

            if(!$surveyRequest || ($surveyRequest->is_payment == 1 || $surveyRequest->is_declined == 1)) {
                $inputs = $request->validated();
                $inputs['user_id'] = auth('user-api')->id();
                $inputs['keywords'] = json_encode($request->get('keywords'));

                $this->surveyRequestRepository->create($inputs);
            }
            return $this->checkStep();

        } catch (\Exception $exception) {
            return $this->responseFail(status: 500, message: $exception->getMessage());
        }

    }

    public function step2(): JsonResponse
    {
        return $this->checkStep();
    }

    public function references(): JsonResponse
    {
        try {
            $surveyRequest = $this->surveyRequestRepository->first('user_id',auth('user-api')->id());

            if(!$surveyRequest) {
                return $this->responseFail(message: __('messages.request_add'));
            }

            return $this->getService->handle(resource: ChooseReferenceResource::class,repository: $this->referenceRepository,method: 'getCollection',parameters: ['survey_request_id',$surveyRequest->id],message: __('user.show_success'));

        }catch (\Exception $exception) {
            return $this->responseFail(status: 500, message: $exception->getMessage());
        }

    }

    public function step3(ChooseReferenceRequest $request): JsonResponse
    {

        DB::beginTransaction();
        try {

            foreach ($request->reference_id as $reference_id) {

                $this->referenceUserChooseRepository->updateOrCreate(['reference_id' => $reference_id,'user_id' => auth('user-api')->id()], ['reference_id' => $reference_id,'user_id' => auth('user-api')->id()]);
            }

            $surveyRequest = $this->surveyRequestRepository->first('user_id',auth('user-api')->id());

            $this->surveyRequestRepository->update($surveyRequest->id,['is_references_choose' => 1]);

            DB::commit();
            return $this->checkStep();

        }catch (\Exception $exception) {

            DB::rollBack();
            return $this->responseFail(status: 500, message: $exception->getMessage());
        }
    }

    public function referencesChoose(): JsonResponse
    {

        try {

            return $this->getService->handle(resource: ReferencePagesResource::class,repository: $this->surveyRequestRepository,method: 'getAllReferencesChoose',message: __('user.show_success'));

        }catch (\Exception $exception) {
            return $this->responseFail(status: 500, message: $exception->getMessage());
        }

    }

    public function step4(ChooseReferencePagesRequest $request): JsonResponse
    {

        DB::beginTransaction();
        try {

            foreach($request->references as $reference) {
                $this->referenceUserChooseRepository->update($reference['id'],['from_page' => $reference['from_page'],'to_page' => $reference['to_page']]);
            }

            $surveyRequest = $this->surveyRequestRepository->first('user_id',auth('user-api')->id());

            $this->surveyRequestRepository->update($surveyRequest->id,['is_payment_ready' => 1]);//Request is ready to payment
            DB::commit();
            return $this->checkStep();

        }catch (\Exception $exception) {
            DB::rollBack();
            return $this->responseFail(status: 500, message: $exception->getMessage());
        }

    }
}
