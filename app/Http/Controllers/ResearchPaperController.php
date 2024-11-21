<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResearchPaperStoreRequest;
use App\Http\Requests\ResearchPaperUpdateRequest;
use App\Http\Services\Dashboard\ResearchPaper\ResearchPaperService;

class ResearchPaperController extends Controller
{
    protected ResearchPaperService $researchPaperService;

    public function __construct(ResearchPaperService $researchPaperService)
    {
        $this->researchPaperService = $researchPaperService;
    }


    public function index(){

      return $this->researchPaperService->index();

    }


    public function create(){

        return $this->researchPaperService->create();

    }

    public function store(ResearchPaperStoreRequest $request)
    {

        return $this->researchPaperService->store($request);

    }


    public function edit($id)
    {
        return $this->researchPaperService->edit($id);

    }


    public function update(ResearchPaperUpdateRequest $request,$id)
    {
        return $this->researchPaperService->update($request,$id);

    }


    public function delete($id)
    {
        return $this->researchPaperService->delete($id);

    }

}
