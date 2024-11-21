<?php

namespace App\Http\Services\Dashboard\MemberShipRequest;
use App\Repository\MemberShipRequestRepositoryInterface;
use App\Repository\PaymentRepositoryInterface;


class MemberShipRequestService
{

    public function __construct(
       private readonly  PaymentRepositoryInterface $paymentRepository,
       private readonly  MemberShipRequestRepositoryInterface $memberShipRequestRepository,
    )
    {
    }

    public function details($id){

        $membership_request = $this->memberShipRequestRepository->getById($id,['*'],['user']);

        return view('dashboard.users.membership_request_details',compact('membership_request'));

    }

    public function new_orders(){

        $new_orders = $this->memberShipRequestRepository->get('is_confirmed',0,['*'],['user']);

        return view('admin.membership_requests.new_orders',compact('new_orders'));

    }



    public function finished_orders(){

        $finished_orders = $this->memberShipRequestRepository->get('is_confirmed',1,['*'],['user']);

        return view('admin.membership_requests.finished_orders',compact('finished_orders'));

    }


    public function refused_orders(){

        $refused_orders = $this->memberShipRequestRepository->get('is_declined',1,['*'],['user']);

        return view('admin.membership_requests.refused_orders',compact('refused_orders'));

    }


    public function payment_details($id){

        $payment = $this->paymentRepository->first('member_ship_request_id',$id);

        if(!$payment){

            toastr()->error(__('dashboard.payment_not_found'));
            return redirect()->back();
        }

        return view('admin.membership_requests.payment_details',compact('payment'));
    }

}
