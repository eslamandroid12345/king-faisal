<?php

namespace App\Http\Services\Dashboard\ResearchPaperDepartment;

use App\Http\Requests\Dashboard\ResearchPaperDepartment\ResearchPaperDepartmentRequest;
use App\Repository\ResearchPaperDepartmentRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class ResearchPaperDepartmentService
{


    public function __construct(
        private readonly ResearchPaperDepartmentRepositoryInterface $researchPaperDepartmentRepository
    )
    {
    }


    public function index(){

        $research_paper_departments = $this->researchPaperDepartmentRepository->paginate();
        return view('dashboard.research_paper_departments.index',compact('research_paper_departments'));
    }


    public function create(){

        return view('dashboard.research_paper_departments.create');
    }

    public function store(ResearchPaperDepartmentRequest $request): RedirectResponse
    {


        try {

            $research_paper_department = $this->researchPaperDepartmentRepository->create([]);
            $this->researchPaperDepartmentRepository->multipleLanguages($research_paper_department,$request,['title','description']);


            return redirect()->route('research_paper_departments.index')->with(['success' => __('dashboard.store')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function edit($id)
    {
        $research_paper_department = $this->researchPaperDepartmentRepository->getById($id);

        return view('dashboard.research_paper_departments.edit',compact('research_paper_department'));
    }


    public function update(ResearchPaperDepartmentRequest $request,$id): RedirectResponse
    {

        try {

            $research_paper_department = $this->researchPaperDepartmentRepository->getById($id);

            $this->researchPaperDepartmentRepository->update($research_paper_department->id,[]);
            $this->researchPaperDepartmentRepository->multipleLanguages($research_paper_department,$request,['title','description']);

            return redirect()->route('research_paper_departments.index')->with(['success' => __('dashboard.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function destroy($id): RedirectResponse
    {

        try {
            $this->researchPaperDepartmentRepository->delete($id);
            return redirect()->route('research_paper_departments.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }



}
