<?php

namespace App\Http\Controllers\Dashboard\ResearchPaper;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ResearchPaper\ResearchPaperStoreRequest;
use App\Http\Requests\Dashboard\ResearchPaper\ResearchPaperUpdateRequest;
use App\Http\Services\Dashboard\ResearchPaper\ResearchPaperService;

class ResearchPaperController extends Controller
{

    public function __construct(
       private readonly ResearchPaperService $researchPaperService
    )
    {
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


    public function destroy($id)
    {
        return $this->researchPaperService->destroy($id);

    }

}
