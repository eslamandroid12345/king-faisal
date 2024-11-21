<?php

namespace App\Http\Services\Api\InformationRequest;

use App\Http\Requests\Api\InformationRequest\InformationRequest;
use App\Http\Resources\InformationRequest\InformationRequestResource;
use App\Http\Services\Mutual\FileManagerService;
use App\Http\Services\Mutual\GetService;
use App\Http\Traits\Response;
use App\Repository\InformationRequestRepositoryInterface;
use App\Repository\SettingRepositoryInterface;
use Illuminate\Http\JsonResponse;

abstract class InformationRequestService
{

    use Response;

    public function __construct(
       private readonly SettingRepositoryInterface             $settingRepository,
       private readonly InformationRequestRepositoryInterface  $informationRequestRepository,
       private readonly GetService                             $getService,
       private readonly FileManagerService                     $fileManagerService
    )
    {
    }

    public function step1(InformationRequest $request): JsonResponse
    {

        $user = auth('user-api')->user();

        $data = $request->validated();
        $data['user_id'] = $user->id;

        if ($request->hasFile('request_information_attachments')) {
            $file = $this->fileManagerService->handle("request_information_attachments", "request_information_attachments/pdf");
            $data['request_information_attachments'] = $file;
        }

        $this->informationRequestRepository->create($data);

        return $this->responseSuccess(message: __('dashboard.store'));

    }


    public function step2(): JsonResponse
    {

        return $this->responseSuccess(message: __('user.information_request_step_two_message'));

    }


    public function step3(): JsonResponse
    {

        $user = auth('user-api')->user();

        $informationRequest = $this->informationRequestRepository->first('user_id',$user->id);

            if (!$informationRequest) {
                return $this->responseFail(message: __('user.data_not_found'));
            }

            if ($informationRequest->is_declined === 1 && $informationRequest->is_finished === 0) {
                return $this->responseFail(status: 201, message: __('user.information_request_not_accept'), data: new InformationRequestResource($informationRequest));
            }

            if ($informationRequest->is_confirmed === 1 && $informationRequest->is_finished === 0) {
                return $this->responseFail(status: 200, message: __('user.information_request_accept'), data: new InformationRequestResource($informationRequest));
            }

            if ($informationRequest->is_confirmed === 0 && $informationRequest->is_finished === 0 && $informationRequest->is_declined === 0) {
                return $this->responseFail(status: 201, message:  __('user.information_request_step_two_message'));
            }

           return $this->responseFail(message: __('user.data_not_found'));

    }



    public function step4(): JsonResponse
    {

        $user = auth('user-api')->user();

        $informationRequest = $this->informationRequestRepository->first('user_id',$user->id);

        if ($informationRequest) {

            $this->informationRequestRepository->update($informationRequest->id,[
                'request_information_full_name' => request()->input('request_information_full_name')
            ]);
            return $this->responseFail(status: 201, message: __('user.request_payment_ready'), data: new InformationRequestResource($informationRequest));
        }

        return $this->responseFail(message: __('user.data_not_found'));


    }


    public function addOrCancel($id): JsonResponse
    {
        $informationRequest = $this->informationRequestRepository->getById($id);

        if($informationRequest){
            if(request()->input('is_canceled') == 1){
                $this->informationRequestRepository->delete($informationRequest->id);
                return $this->responseSuccess(message: __('dashboard.delete'));

            }else{
                $this->informationRequestRepository->update($informationRequest->id,['request_step' => 4]);
                return $this->responseFail(status: 200, message: __('user.request_payment_ready'));
            }
        }
        return $this->responseFail(message: __('user.data_not_found'));

    }


}
