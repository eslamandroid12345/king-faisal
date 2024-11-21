<?php

namespace App\Http\Controllers\Api\ResearchPaper;

use App\Http\Controllers\Controller;
use App\Http\Services\Api\ResearchPaper\ResearchPaperService;
use Illuminate\Http\JsonResponse;

class ResearchPaperController extends Controller
{

    protected ResearchPaperService $researchPaperService;

    public function __construct(ResearchPaperService $researchPaperService)
    {
        $this->researchPaperService = $researchPaperService;
    }

    public function departments(): JsonResponse
    {
       return $this->researchPaperService->departments();
    }

    public function getAllByDepartmentId($departmentId): JsonResponse
    {

        return $this->researchPaperService->getAllByDepartmentId($departmentId);

    }
}
