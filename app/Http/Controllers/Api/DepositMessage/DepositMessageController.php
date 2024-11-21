<?php

namespace App\Http\Controllers\Api\DepositMessage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Message\MessageDepositRequest;
use App\Http\Services\Api\DepositMessage\DepositMessageService;
use Illuminate\Http\JsonResponse;

class DepositMessageController extends Controller
{

    protected DepositMessageService $depositMessageService;

    public function __construct(DepositMessageService $depositMessageService)
    {
        $this->depositMessageService = $depositMessageService;
    }


    public function store(MessageDepositRequest $request): JsonResponse
    {
        return $this->depositMessageService->store($request);
    }
}
