<?php

namespace App\Http\Services\Api\AboutCenter;
use App\Http\Resources\AboutCenter\AboutChairmanOfTheBoardResource;
use App\Http\Resources\AboutCenter\AboutUsResource;
use App\Http\Resources\AboutCenter\AspirationResource;
use App\Http\Resources\AboutCenter\ChairmanOfTheBoardResource;
use App\Http\Resources\AboutCenter\ManagementResource;
use App\Http\Resources\AboutCenter\ManagerShowResource;
use App\Http\Resources\AboutCenter\NewsCollection;
use App\Http\Resources\AboutCenter\RolesAroundTheWorldResource;
use App\Http\Services\Mutual\GetService;
use App\Http\Traits\Response;
use App\Repository\AboutChairmanOfTheBoardRepositoryInterface;
use App\Repository\AboutUsInformationRepositoryInterface;
use App\Repository\AspirationRepositoryInterface;
use App\Repository\ChairmanOfTheBoardNewRepositoryInterface;
use App\Repository\ChairmanOfTheBoardRepositoryInterface;
use App\Repository\ManagementRepositoryInterface;
use App\Repository\RolesAroundTheWorldRepositoryInterface;
use Illuminate\Http\JsonResponse;

abstract class AboutCenterService
{

   use Response;

   public function __construct(
       private readonly GetService                                 $getService,
       private readonly AboutUsInformationRepositoryInterface      $aboutUsInformationRepository,
       private readonly AboutChairmanOfTheBoardRepositoryInterface $aboutChairmanOfTheBoardRepository,
       private readonly ManagementRepositoryInterface              $managementRepository,
       private readonly ChairmanOfTheBoardRepositoryInterface      $chairmanOfTheBoardRepository,
       private readonly AspirationRepositoryInterface              $aspirationRepository,
       private readonly RolesAroundTheWorldRepositoryInterface     $rolesAroundTheWorldRepository,
       private readonly ChairmanOfTheBoardNewRepositoryInterface   $chairmanOfTheBoardNewRepository
   )
   {
   }


    public function aboutUs(): JsonResponse
    {
        $data = $this->getAboutUsData();
        return $this->responseSuccess(message: __('user.show_success'), data: $data);
    }


    private function getAboutUsData(): array
    {

        return [
            'about_us' => $this->getService->handleResponse(
                resource: AboutUsResource::class,
                repository: $this->aboutUsInformationRepository,
                method: 'getFirst',
                is_instance: true
            ),
            'aspirations' => $this->getService->handleResponse(
                resource: AspirationResource::class,
                repository: $this->aspirationRepository,
                method: 'getAll',
            ),
        ];
    }


    public function dateOfCenter(): JsonResponse
    {
        return $this->getService->handle(
            resource: AboutChairmanOfTheBoardResource::class,
            repository: $this->aboutChairmanOfTheBoardRepository,
            method: 'getCollection',
            parameters: ['type','center_date'],
            message: __('user.show_success')
        );
    }

    public function chairmanOfTheBoards(): JsonResponse
    {

        try {

        $data = $this->getChairmanOfTheBoardsData();
        return $this->responseSuccess(message: __('user.show_success'), data: $data);

        } catch (\Exception $exception) {
            return $this->responseFail(message: __('user.data_not_found'));
        }

    }


    private function getChairmanOfTheBoardsData(): array
    {
        return [

            'chairman_of_the_board' => $this->getService->handleResponse(
                resource: ChairmanOfTheBoardResource::class,
                repository: $this->chairmanOfTheBoardRepository,
                method: 'getFirst',
                is_instance: true
            ),
            'roles_around_the_world' => $this->getService->handleResponse(
                resource: RolesAroundTheWorldResource::class,
                repository: $this->rolesAroundTheWorldRepository,
                method: 'getAll',
            ),
            'award' => $this->getService->handleResponse(
                resource: AboutChairmanOfTheBoardResource::class,
                repository: $this->aboutChairmanOfTheBoardRepository,
                method: 'getCollection',
                parameters: ['type','award'],
            ),
            'honorary_degree' => $this->getService->handleResponse(
                resource: AboutChairmanOfTheBoardResource::class,
                repository: $this->aboutChairmanOfTheBoardRepository,
                method: 'getCollection',
                parameters: ['type','honorary_degree'],
            ),
            'news' => $this->getService->handleResponse(
                resource: NewsCollection::class,
                repository: $this->chairmanOfTheBoardNewRepository,
                method: 'paginate',
                is_instance: true
            )
        ];
    }

    public function managements(): JsonResponse
    {
        return $this->getService->handle(
            resource: ManagementResource::class,
            repository: $this->managementRepository,
            method: 'getAll',
            message: __('user.show_success')
        );
    }


    public function managerDetail($id): JsonResponse
    {

        return $this->getService->handle(
            resource: ManagerShowResource::class,
            repository: $this->managementRepository,
            method: 'getById',
            parameters: [$id],
            is_instance: true,
            message: __('user.show_success')
        );

    }

}
