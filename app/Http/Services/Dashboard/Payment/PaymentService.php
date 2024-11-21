<?php

namespace App\Http\Services\Dashboard\Payment;

use App\Repository\PaymentRepositoryInterface;

class PaymentService
{

    public function __construct(
        private readonly PaymentRepositoryInterface $paymentRepository
    )
    {
    }


    public function paymentsTransfers(){

        $payments = $this->paymentRepository->get('payment_type','CASH');

        return view('dashboard.payments.transfers',compact('payments'));

    }


}
