<?php

namespace App\Http\Services\Api\Antique;

use App\Http\Resources\Antique\AntiqueCollection;
use App\Http\Resources\Antique\AntiqueShowResource;
use App\Http\Services\Mutual\GetService;
use App\Http\Traits\Response;
use App\Repository\AntiqueRepositoryInterface;
use Illuminate\Http\JsonResponse;

abstract class AntiqueService
{
    use Response;


    public function __construct(
       private readonly AntiqueRepositoryInterface $antiqueRepository,
       private readonly GetService $getService
    ){
    }

    public function getAllAntiques(): JsonResponse
    {
        return $this->getService->handle(resource: AntiqueCollection::class,repository: $this->antiqueRepository,method: 'paginate',is_instance: true,message: __('user.show_success'));
    }


    public function showOneAntique($id): JsonResponse
    {

        return $this->getService->handle(resource: AntiqueShowResource::class,repository: $this->antiqueRepository,method: 'getById',parameters: [$id],is_instance: true,message: __('user.show_success'));

    }

}
