<?php

namespace App\Http\Services\Dashboard\AboutUsInformation;

use App\Http\Requests\Dashboard\AboutUsInformation\AboutUsInformationStoreRequest;
use App\Http\Requests\Dashboard\AboutUsInformation\AboutUsInformationUpdateRequest;
use App\Repository\AboutUsInformationRepositoryInterface;
use App\Http\Services\Mutual\FileManagerService;
use Illuminate\Http\RedirectResponse;

class AboutUsInformationService
{

    public function __construct(
       private readonly  AboutUsInformationRepositoryInterface $aboutUsInformationRepository,
       private readonly  FileManagerService $fileManagerService
    )
    {
    }


    public function index(){

        $about_us_informations = $this->aboutUsInformationRepository->paginate();
        return view('dashboard.about_us_informations.index',compact('about_us_informations'));
    }


    public function create(){


        return view('dashboard.about_us_informations.create');
    }

    public function store(AboutUsInformationStoreRequest $request): RedirectResponse
    {

        try {
            $inputs = $request->only('image');

            if($request->hasFile('image')){

                $image = $this->fileManagerService->handle("image","about_us_informations/images");
                $inputs['image'] = $image;

            }
            $about_us_information = $this->aboutUsInformationRepository->create($inputs);
            $this->aboutUsInformationRepository->multipleLanguages($about_us_information,$request,['header','title','description']);
            return redirect()->route('about_us_informations.index')->with(['success' => __('dashboard.store')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function edit($id)
    {
        $about_us_information = $this->aboutUsInformationRepository->getById($id);

        return view('dashboard.about_us_informations.edit',compact('about_us_information'));
    }


    public function update(AboutUsInformationUpdateRequest $request,$id): RedirectResponse
    {

        try {
            $about_us_information = $this->aboutUsInformationRepository->getById($id);
            $inputs = $request->only('image');

            if($request->hasFile('image')){

                $image = $this->fileManagerService->handle("image","about_us_informations/images",$about_us_information->image);
                $inputs['image'] = $image;

            }
            $this->aboutUsInformationRepository->update($about_us_information->id,$inputs);
            $this->aboutUsInformationRepository->multipleLanguages($about_us_information,$request,['header','title','description']);
            return redirect()->route('about_us_informations.index')->with(['success' => __('dashboard.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function destroy($id): RedirectResponse
    {

        try {
            $this->aboutUsInformationRepository->delete($id);
            return redirect()->route('about_us_informations.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }



}
