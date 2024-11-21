<?php

namespace App\Http\Services\Dashboard\MessageDeposit;

use App\Repository\MessageDepositRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class MessageDepositService
{

    public function __construct(
        private readonly  MessageDepositRepositoryInterface $messageDepositRepository
    )
    {
    }

    public function index(){

        $message_deposits = $this->messageDepositRepository->message_deposits();
        return view('dashboard.message_deposits.index',compact('message_deposits'));
    }

    public function destroy($id): RedirectResponse
    {

        try {
            $this->messageDepositRepository->delete($id);
            return redirect()->route('message_deposits.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }
}
