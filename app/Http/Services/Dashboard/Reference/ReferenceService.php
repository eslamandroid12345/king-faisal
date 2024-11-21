<?php

namespace App\Http\Services\Dashboard\Reference;

use App\Http\Requests\ReferenceRequest;
use App\Repository\ReferenceRepositoryInterface;
use App\Repository\SurveyRequestRepositoryInterface;

class ReferenceService
{

    public function __construct(
        private readonly ReferenceRepositoryInterface $referenceRepository,
        private readonly SurveyRequestRepositoryInterface $surveyRequestRepository
    )
    {
    }


    public function index($id){

        $references = $this->referenceRepository->get('survey_request_id',$id);
        return view('admin.survey_requests.references.references',compact('references','id'));
    }


    public function create($id){

        return view('admin.survey_requests.references.create',compact('id'));
    }

    public function store(ReferenceRequest $request)
    {

        $this->referenceRepository->create($request->all());
        $survey_request = $this->surveyRequestRepository->getById($request->survey_request_id);

        $this->surveyRequestRepository->update($survey_request->id,['is_references_uploaded' => 1]);
        toastr()->success(__('dashboard.store'));

        return redirect()->route('survey_requests.new');
    }



    public function delete($id)
    {
        $reference = $this->referenceRepository->getById($id);
        $this->referenceRepository->delete($reference->id);
        toastr()->error(__('dashboard.delete'));

        return redirect()->route('survey_requests.new');

    }


}
