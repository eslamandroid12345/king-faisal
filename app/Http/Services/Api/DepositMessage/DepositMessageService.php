<?php

namespace App\Http\Services\Api\DepositMessage;

use App\Http\Requests\Api\Message\MessageDepositRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Http\Traits\Response;
use App\Repository\MessageDepositRepositoryInterface;
use Illuminate\Http\JsonResponse;

abstract class DepositMessageService
{

    use Response;

    public function __construct(
        private readonly MessageDepositRepositoryInterface $messageDepositRepository,
        private readonly FileManagerService                $fileManagerService
    )
    {
    }


    public function store(MessageDepositRequest $request): JsonResponse
    {
        $data = $request->validated();

        $data['user_id'] = auth('user-api')->id();

        if($request->hasFile('attachments')){

            $file = $this->fileManagerService->handle("attachments","message_deposits/attachments");
            $data['attachments'] = $file;

        }

        $this->messageDepositRepository->create($data);

        return $this->responseSuccess(message: __('dashboard.store'));


    }

}
