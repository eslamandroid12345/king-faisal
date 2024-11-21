<?php

namespace App\Http\Services\Api\MediaCenter;

use App\Http\Resources\MediaCenter\AnnualOfferCollection;
use App\Http\Resources\MediaCenter\NewsCollection;
use App\Http\Resources\MediaCenter\NewsResource;
use App\Http\Resources\MediaCenter\PreviousEventsCollection;
use App\Http\Resources\MediaCenter\VideoCollection;
use App\Http\Services\Mutual\GetService;
use App\Http\Traits\Response;
use App\Repository\MediaCenterDepartmentRepositoryInterface;
use Illuminate\Http\JsonResponse;

abstract class MediaCenterService
{

    use Response;

    public function __construct(
      private readonly GetService                                $getService,
      private readonly  MediaCenterDepartmentRepositoryInterface $mediaCenterDepartmentRepository
    )
    {
    }


    public function news(): JsonResponse
    {
        return $this->getService->handle(resource: NewsCollection::class,repository: $this->mediaCenterDepartmentRepository,method: 'get',parameters: ['type','new'],is_instance: true,message: __('user.show_success'));
    }


    public function previousEvents(): JsonResponse
    {
        return $this->getService->handle(resource: PreviousEventsCollection::class,repository: $this->mediaCenterDepartmentRepository,method: 'get',parameters: ['type','previous_events'],is_instance: true,message: __('user.show_success'));

    }


    public function video(): JsonResponse
    {
        return $this->getService->handle(resource: VideoCollection::class,repository: $this->mediaCenterDepartmentRepository,method: 'get',parameters: ['type','video'],is_instance: true,message: __('user.show_success'));

    }


    public function annualOffer(): JsonResponse
    {
        return $this->getService->handle(resource: AnnualOfferCollection::class,repository: $this->mediaCenterDepartmentRepository,method: 'get',parameters: ['type','annual_offer'],is_instance: true,message: __('user.show_success'));

    }

    public function newShow($id): JsonResponse
    {
        return $this->getService->handle(resource: NewsResource::class,repository: $this->mediaCenterDepartmentRepository,method: 'getById',parameters: [$id],is_instance: true,message: __('user.show_success'));

    }

}
