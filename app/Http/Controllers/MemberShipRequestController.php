<?php

namespace App\Http\Controllers;

use App\Http\Services\Dashboard\MemberShipRequest\MemberShipRequestService;

class MemberShipRequestController extends Controller
{
    protected MemberShipRequestService $memberShipRequestService;

    public function __construct(MemberShipRequestService $memberShipRequestService)
    {

        $this->memberShipRequestService = $memberShipRequestService;
    }



    public function details($id){

        return $this->memberShipRequestService->details($id);

    }

    public function new_orders(){

     return $this->memberShipRequestService->new_orders();

    }




    public function finished_orders(){

        return $this->memberShipRequestService->finished_orders();

    }


    public function refused_orders(){

        return $this->memberShipRequestService->refused_orders();

    }


    public function payment_details($id){

        return $this->memberShipRequestService->payment_details($id);

    }


}
