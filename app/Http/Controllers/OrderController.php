<?php

namespace App\Http\Controllers;

use App\Http\Services\Dashboard\Order\OrderService;

class OrderController extends Controller
{

    protected OrderService $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }


    public function new_orders(){

     return $this->orderService->new_orders();

    }



    public function in_progress_orders(){

        return $this->orderService->in_progress_orders();

    }


    public function finished_orders(){

        return $this->orderService->finished_orders();

    }


    public function refused_orders(){

        return $this->orderService->refused_orders();

    }


    public function order_details($id){

        return $this->orderService->order_details($id);


    }

    public function payment_details($id){

        return $this->orderService->payment_details($id);

    }



    ######### Update Order Status ##########
    public function in_progress_status($id){


        return $this->orderService->in_progress_status($id);

    }


    public function finished_status($id){

        return $this->orderService->finished_status($id);

    }


    public function refused_status($id){

        return $this->orderService->refused_status($id);

    }
}
