<?php

namespace App\Http\Services\Dashboard\SurveyRequest;
use App\Http\Requests\SurveyRequestUpdateRequest;
use App\Repository\SurveyRequestRepositoryInterface;

class SurveyRequestService
{

    public function __construct(
        private readonly SurveyRequestRepositoryInterface $surveyRequestRepository
    )
    {
    }


    public function new_orders(){

        $new_orders = $this->surveyRequestRepository->get('is_confirmed',0);

        return view('admin.survey_requests.new_orders',compact('new_orders'));

    }

     public function accept_orders(){

        $accept_orders = $this->surveyRequestRepository->get('is_confirmed',1);

        return view('admin.survey_requests.accept_orders',compact('accept_orders'));

    }

    public function finished_orders(){

        $finished_orders = $this->surveyRequestRepository->get('is_payment',1);

        return view('admin.survey_requests.finished_orders',compact('finished_orders'));

    }


    public function refused_orders(){

        $refused_orders = $this->surveyRequestRepository->get('is_declined',1);

        return view('admin.survey_requests.refused_orders',compact('refused_orders'));

    }


    public function payment_details($id){

        $payment = $this->surveyRequestRepository->payment_details($id);

        if(!$payment){

            toastr()->error(__('dashboard.payment_not_found'));
            return redirect()->back();
        }

        return view('admin.survey_requests.payment_details',compact('payment'));
    }



    ######### Survey Request Update Status ##########

   public function accept_status($id){


        $referenceCount = $this->surveyRequestRepository->referencesCount($id);

        if($referenceCount < 1){

            toastr()->error(__('dashboard.survey_request_accept_error'));

        }else{

            $this->surveyRequestRepository->update($id,['is_confirmed'=>1]);

            toastr()->success(__('dashboard.order_update_status'));

        }
       return redirect()->back();

   }


    public function finished_status($id){

        $surveyRequest = $this->surveyRequestRepository->getById($id);

        $surveyRequest->update($surveyRequest->id,['is_confirmed'=>1,'is_payment'=>1]);

        toastr()->success(__('dashboard.order_update_status'));

        return redirect()->back();

    }


    public function refused_status($id){


        $surveyRequest = $this->surveyRequestRepository->getById($id);

        $surveyRequest->update($surveyRequest->id,['is_declined'=>1]);

        toastr()->success(__('dashboard.order_update_status'));

        return redirect()->back();
    }




    public function edit($id)
    {
        $survey_request = $this->surveyRequestRepository->getById($id);

        return view('admin.survey_requests.edit',compact('survey_request'));
    }


    public function update($id,SurveyRequestUpdateRequest $request)
    {
        $survey_request = $this->surveyRequestRepository->getById($id);

        $inputs = $request->validated();

        $this->surveyRequestRepository->update($survey_request->id,$inputs);
        toastr()->success(__('dashboard.update'));

        return redirect()->route('survey_requests.accept');
    }



}
