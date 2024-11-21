<?php

namespace App\Http\Services\Api\UniversityMessage;

use App\Http\Requests\Api\Message\UniversityMessageRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Http\Traits\Response;
use App\Repository\UniversityMessagesRepositoryInterface;
use Illuminate\Http\JsonResponse;

abstract class UniversityMessageService
{

    use Response;

    public function __construct(
        private readonly UniversityMessagesRepositoryInterface $universityMessagesRepository,
        private readonly FileManagerService                    $fileManagerService
    )
    {
    }


    public function store(UniversityMessageRequest $request): JsonResponse
    {
        $data = $request->validated();

        $data['user_id'] = auth('user-api')->id();

        if($request->hasFile('attachments')){

            $file = $this->fileManagerService->handle("attachments","university_messages/attachments");
            $data['attachments'] = $file;

        }
        $this->universityMessagesRepository->create($data);

        return $this->responseSuccess(message: __('dashboard.store'));


    }

}
