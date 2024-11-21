<?php

namespace App\Http\Services\Api\ResearchPaper;

use App\Http\Resources\ResearchPaper\ResearchPaperCollection;
use App\Http\Resources\ResearchPaperDepartment\ResearchPaperDepartmentResource;
use App\Http\Services\Mutual\GetService;
use App\Repository\ResearchPaperDepartmentRepositoryInterface;
use App\Repository\ResearchPaperRepositoryInterface;
use Illuminate\Http\JsonResponse;

abstract class ResearchPaperService
{
    public function __construct(
       private readonly ResearchPaperDepartmentRepositoryInterface $researchPaperDepartmentRepository,
       private readonly ResearchPaperRepositoryInterface $researchPaperRepository,
       private readonly GetService $getService
    )
    {
    }


    public function departments(): JsonResponse
    {
        return $this->getService->handle(resource: ResearchPaperDepartmentResource::class,repository: $this->researchPaperDepartmentRepository,method: 'getAll',message:  __('user.show_success'));
    }

    public function getAllByDepartmentId($departmentId): JsonResponse
    {

        return $this->getService->handle(resource: ResearchPaperCollection::class,repository: $this->researchPaperRepository,method: 'getAllByDepartmentId',parameters: [$departmentId],is_instance: true,message:  __('user.show_success'));

    }

}
