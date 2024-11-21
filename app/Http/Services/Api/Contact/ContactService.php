<?php

namespace App\Http\Services\Api\Contact;

use App\Http\Requests\Api\Contact\ContactRequest;
use App\Http\Requests\Api\Contact\StoreVisitorRequest;
use App\Http\Resources\Contact\EntityResource;
use App\Http\Services\Mutual\GetService;
use App\Http\Traits\Response;
use App\Repository\ContactRepositoryInterface;
use App\Repository\EntityRepositoryInterface;
use App\Repository\EntityVisitorRepositoryInterface;
use Illuminate\Http\JsonResponse;

abstract class ContactService
{

    use Response;

    public function __construct(
       private readonly GetService                       $getService,
       private readonly ContactRepositoryInterface       $contactRepository,
       private readonly EntityVisitorRepositoryInterface $entityVisitorRepository,
       private readonly EntityRepositoryInterface        $entityRepository
    )
    {
    }


    public function contactUs(ContactRequest $request): JsonResponse
    {

        $data = $request->validated();

        $this->contactRepository->create($data);

        return $this->responseSuccess(message: __('dashboard.store'));

    }

    public function getAllEntities(): JsonResponse
    {

        return $this->getService->handle(resource: EntityResource::class,repository: $this->entityRepository,method: 'getAll',message:  __('user.show_success'));
    }


    public function storeVisitorRequest(StoreVisitorRequest $request): JsonResponse
    {
        $data = $request->validated();

        $this->entityVisitorRepository->create($data);

        return $this->responseSuccess(message: __('dashboard.store'));
    }


}
