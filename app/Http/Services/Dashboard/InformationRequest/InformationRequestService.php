<?php

namespace App\Http\Services\Dashboard\InformationRequest;
use App\Models\Payment;
use App\Repository\InformationRequestRepositoryInterface;
use App\Repository\PaymentRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class InformationRequestService
{

    public function __construct(
        private readonly InformationRequestRepositoryInterface $informationRequestRepository,
        private readonly PaymentRepositoryInterface $paymentRepository
    )
    {
    }



    public function new_orders(){

        $new_orders = $this->informationRequestRepository->get('status','new',['*'],['user']);

        return view('admin.request_information.new_orders',compact('new_orders'));

    }



    public function accept_orders(){

        $accept_orders = $this->informationRequestRepository->get('status','accept',['*'],['user']);

        return view('admin.request_information.accept_orders',compact('accept_orders'));

    }


    public function finished_orders(){

        $finished_orders = $this->informationRequestRepository->get('status','finished',['*'],['user']);

        return view('admin.request_information.finished_orders',compact('finished_orders'));

    }


    public function refused_orders(){

        $refused_orders = $this->informationRequestRepository->get('status','refused',['*'],['user']);

        return view('admin.request_information.refused_orders',compact('refused_orders'));

    }




    public function payment_details($id){

        $payment = $this->paymentRepository->first('request_information_id',$id);

        if(!$payment){

            toastr()->error(__('dashboard.payment_not_found'));
            return redirect()->back();
        }

        return view('admin.request_information.payment_details',compact('payment'));
    }



    ######### Update Information request Status ##########
    public function accept_status($id){

        $requestInformation = $this->informationRequestRepository->getById($id);

        $this->informationRequestRepository->update($requestInformation->id,['status'=>'accept']);

        toastr()->success(__('dashboard.order_update_status'));

        return redirect()->back();

    }


    public function finished_status($id): RedirectResponse
    {

        $requestInformation = $this->informationRequestRepository->getById($id);

        $this->informationRequestRepository->update($requestInformation->id,['status'=>'finished']);


        toastr()->success(__('dashboard.order_update_status'));

        return redirect()->back();

    }


    public function refused_status($id){


        $requestInformation = $this->informationRequestRepository->getById($id);

        $this->informationRequestRepository->update($requestInformation->id,['status'=>'refused']);


        toastr()->success(__('dashboard.order_update_status'));

        return redirect()->back();
    }



}
