<?php

namespace App\Http\Services\Dashboard\Order;

use App\Repository\OrderRepositoryInterface;

class OrderService
{

    public function __construct(
        private readonly OrderRepositoryInterface $orderRepository
    )
    {
    }

    public function new_orders(){

        $new_orders = $this->orderRepository->get('status','new',['*'],['user']);

        return view('admin.orders.new_orders',compact('new_orders'));

    }

    public function in_progress_orders(){

        $in_progress_orders = $this->orderRepository->get('status','in_progress',['*'],['user']);

        return view('admin.orders.in_progress_orders',compact('in_progress_orders'));

    }


    public function finished_orders(){

        $finished_orders = $this->orderRepository->get('status','finished',['*'],['user']);

        return view('admin.orders.finished_orders',compact('finished_orders'));

    }


    public function refused_orders(){

        $refused_orders = $this->orderRepository->get('status','refused',['*'],['user']);

        return view('admin.orders.refused_orders',compact('refused_orders'));

    }


    public function order_details($id){

        $order_details = $this->orderRepository->order_details($id);

        return view('admin.orders.order_details',compact('order_details'));

    }

    public function payment_details($id){

        $payment = $this->orderRepository->payment_details($id);
        if(!$payment){

            toastr()->error(__('dashboard.payment_not_found'));
            return redirect()->back();
        }

        return view('admin.orders.payment_details',compact('payment'));
    }



    ######### Update Order Status ##########
    public function in_progress_status($id){


        $this->orderRepository->in_progress_status($id);

        toastr()->success(__('dashboard.order_update_status'));

        return redirect()->back();

    }


    public function finished_status($id){

        $this->orderRepository->finished_status($id);

        toastr()->success(__('dashboard.order_update_status'));

        return redirect()->back();

    }


    public function refused_status($id){


        $this->orderRepository->refused_status($id);

        toastr()->success(__('dashboard.order_update_status'));

        return redirect()->back();
    }

}
