<?php

namespace App\Http\Services\Dashboard\ResearchPaper;
use App\Http\Requests\Dashboard\ResearchPaper\ResearchPaperStoreRequest;
use App\Http\Requests\Dashboard\ResearchPaper\ResearchPaperUpdateRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Repository\ResearchPaperDepartmentRepositoryInterface;
use App\Repository\ResearchPaperRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class ResearchPaperService
{

    public function __construct(
        private readonly ResearchPaperRepositoryInterface $researchPaperRepository,
        private readonly FileManagerService $fileManagerService,
        private readonly ResearchPaperDepartmentRepositoryInterface $researchPaperDepartmentRepository
    )
    {
    }


    public function index(){

        $research_papers = $this->researchPaperRepository->getAllResearchPapers();
        $research_paper_departments = $this->researchPaperDepartmentRepository->getAll();

        return view('dashboard.research_papers.index',get_defined_vars());
    }


    public function create(){

        $research_paper_departments = $this->researchPaperDepartmentRepository->getAll();
        return view('dashboard.research_papers.create',compact('research_paper_departments'));
    }

    public function store(ResearchPaperStoreRequest $request): RedirectResponse
    {

        try {

            $inputs = $request->only('editor', 'background_image', 'show_home_page', 'research_department_id');

            if($request->hasFile('background_image')){

                $image = $this->fileManagerService->handle("background_image","research_papers/images");
                $inputs['background_image'] = $image;

            }
            $research_paper = $this->researchPaperRepository->create($inputs);
            $this->researchPaperRepository->multipleLanguages($research_paper,$request,['title','description']);

            return redirect()->route('research_papers.index')->with(['success' => __('dashboard.store')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function edit($id)
    {
        $research_paper = $this->researchPaperRepository->getById($id);

        $research_paper_departments = $this->researchPaperDepartmentRepository->getAll();

        return view('dashboard.research_papers.edit',compact('research_paper','research_paper_departments'));
    }


    public function update(ResearchPaperUpdateRequest $request,$id): RedirectResponse
    {

        try {

            $research_paper = $this->researchPaperRepository->getById($id);
            $inputs = $request->only('editor', 'background_image', 'show_home_page', 'research_department_id');

            if($request->hasFile('background_image')){

                $image = $this->fileManagerService->handle("background_image","research_papers/images");
                $inputs['background_image'] = $image;

            }
            $this->researchPaperRepository->update($research_paper->id,$inputs);
            $this->researchPaperRepository->multipleLanguages($research_paper,$request,['title','description']);

            return redirect()->route('research_papers.index')->with(['success' => __('dashboard.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function destroy($id): RedirectResponse
    {

        try {
            $this->researchPaperRepository->delete($id);
            return redirect()->route('research_papers.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }



}
