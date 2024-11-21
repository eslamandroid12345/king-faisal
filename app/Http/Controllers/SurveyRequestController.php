<?php

namespace App\Http\Controllers;

use App\Http\Requests\SurveyRequestUpdateRequest;
use App\Http\Services\Dashboard\SurveyRequest\SurveyRequestService;

class SurveyRequestController extends Controller
{
    protected SurveyRequestService $surveyRequestService;

    public function __construct(SurveyRequestService $surveyRequestService)
    {
        $this->surveyRequestService = $surveyRequestService;
    }



    public function new_orders(){

        return $this->surveyRequestService->new_orders();

    }


    public function accept_orders(){

        return $this->surveyRequestService->accept_orders();

    }


    public function finished_orders(){

        return $this->surveyRequestService->finished_orders();

    }


    public function refused_orders(){

        return $this->surveyRequestService->refused_orders();
    }




    public function payment_details($id){

        return $this->surveyRequestService->payment_details($id);

    }



    ######### Survey Request Update Status ##########
    public function in_progress_status($id){

        return $this->surveyRequestService->in_progress_status($id);


    }
    public function accept_status($id){


        return $this->surveyRequestService->accept_status($id);


    }


    public function finished_status($id){


        return $this->surveyRequestService->finished_status($id);

    }


    public function refused_status($id){


        return $this->surveyRequestService->refused_status($id);


    }

    public function payment_ready($id){


        return $this->surveyRequestService->payment_ready($id);


    }

    public function edit($id)
    {

        return $this->surveyRequestService->edit($id);

    }


    public function update($id,SurveyRequestUpdateRequest $request)
    {

        return $this->surveyRequestService->update($id,$request);

    }



}
