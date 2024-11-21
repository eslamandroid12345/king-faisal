<?php

namespace App\Http\Controllers;

use App\Http\Services\Dashboard\InformationRequest\InformationRequestService;

class InformationRequestController extends Controller
{


    protected InformationRequestService $informationRequestService;

    public function __construct(InformationRequestService $informationRequestService)
    {
        $this->informationRequestService = $informationRequestService;
    }


    public function new_orders(){

      return $this->informationRequestService->new_orders();

    }



    public function accept_orders(){

        return $this->informationRequestService->accept_orders();

    }


    public function finished_orders(){


        return $this->informationRequestService->finished_orders();

    }


    public function refused_orders(){


        return $this->informationRequestService->refused_orders();

    }




    public function payment_details($id){

        return $this->informationRequestService->payment_details($id);

    }



    ######### Update Information request Status ##########
    public function accept_status($id){

        return $this->informationRequestService->accept_status($id);

    }


    public function finished_status($id){

        return $this->informationRequestService->finished_status($id);


    }


    public function refused_status($id){

        return $this->informationRequestService->refused_status($id);

    }
}
