<?php

namespace App\Http\Controllers\Dashboard\Payment;

use App\Http\Controllers\Controller;
use App\Http\Services\Dashboard\Payment\PaymentService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function __construct(
       private readonly PaymentService $paymentService
    )
    {
    }

    public function paymentsTransfers(){

        return $this->paymentService->paymentsTransfers();
    }

}
