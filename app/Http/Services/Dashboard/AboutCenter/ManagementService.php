<?php

namespace App\Http\Services\Dashboard\AboutCenter;
use App\Http\Requests\Dashboard\Management\ManagementStoreRequest;
use App\Http\Requests\Dashboard\Management\ManagementUpdateRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Repository\ManagementRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class ManagementService
{

    public function __construct(
       private readonly   ManagementRepositoryInterface $managementRepository,
       private readonly  FileManagerService $fileManagerService
    )
    {
    }


    public function index(){

        $managements =  $this->managementRepository->paginate();
        return view('dashboard.about_center.managements.index',compact('managements'));
    }


    public function create(){

        return view('dashboard.about_center.managements.create');
    }

    public function store(ManagementStoreRequest $request): RedirectResponse
    {

        try {
            $inputs = $request->only('name', 'background_image',);

            if($request->hasFile('background_image')){

                $image = $this->fileManagerService->handle("background_image","about_center/managements/images");
                $inputs['background_image'] = $image;

            }
            $management =  $this->managementRepository->create($inputs);
            $this->managementRepository->multipleLanguages($management,$request,['role','description']);

            return redirect()->route('managements.index')->with(['success' => __('dashboard.store')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function edit($id)
    {
        $management =  $this->managementRepository->getById($id);

        return view('dashboard.about_center.managements.edit',compact('management'));
    }


    public function update(ManagementUpdateRequest $request,$id): RedirectResponse
    {

        try {
            $management =  $this->managementRepository->getById($id);
            $inputs = $request->only('name', 'background_image',);

            if($request->hasFile('background_image')){

                $image = $this->fileManagerService->handle("background_image", "about_center/managements/images", $management->background_image);

                $inputs['background_image'] = $image;
            }

            $this->managementRepository->update($management->id,$inputs);
            $this->managementRepository->multipleLanguages($management,$request,['role','description']);

            return redirect()->route('managements.index')->with(['success' => __('dashboard.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function destroy($id): RedirectResponse
    {
        try {
            $this->managementRepository->delete($id);
            return redirect()->route('managements.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


}
