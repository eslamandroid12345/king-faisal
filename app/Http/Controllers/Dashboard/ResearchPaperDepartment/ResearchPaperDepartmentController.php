<?php

namespace App\Http\Controllers\Dashboard\ResearchPaperDepartment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ResearchPaperDepartment\ResearchPaperDepartmentRequest;
use App\Http\Services\Dashboard\ResearchPaperDepartment\ResearchPaperDepartmentService;
use Illuminate\Http\RedirectResponse;

class ResearchPaperDepartmentController extends Controller
{

    public function __construct(
       private readonly ResearchPaperDepartmentService $researchPaperDepartmentService
    )
    {
    }


    public function index(){

        return $this->researchPaperDepartmentService->index();
    }


    public function create(){

        return $this->researchPaperDepartmentService->create();

    }

    public function store(ResearchPaperDepartmentRequest $request): RedirectResponse
    {

        return $this->researchPaperDepartmentService->store($request);

    }


    public function edit($id)
    {
        return $this->researchPaperDepartmentService->edit($id);

    }


    public function update(ResearchPaperDepartmentRequest $request,$id): RedirectResponse
    {

        return $this->researchPaperDepartmentService->update($request,$id);

    }


    public function destroy($id): RedirectResponse
    {
        return $this->researchPaperDepartmentService->destroy($id);

    }
}
