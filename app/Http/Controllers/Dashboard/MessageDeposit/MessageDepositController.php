<?php

namespace App\Http\Controllers\Dashboard\MessageDeposit;

use App\Http\Controllers\Controller;
use App\Http\Services\Dashboard\MessageDeposit\MessageDepositService;

class MessageDepositController extends Controller
{

    public function __construct(
       private readonly MessageDepositService $messageDepositService
    )
    {
    }


    public function index(){

       return $this->messageDepositService->index();
    }

    public function destroy($id){

        return $this->messageDepositService->destroy($id);
    }

}
