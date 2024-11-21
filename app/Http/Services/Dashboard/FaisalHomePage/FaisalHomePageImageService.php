<?php

namespace App\Http\Services\Dashboard\FaisalHomePage;
use App\Http\Requests\StoreFaisalHomePageImageRequest;
use App\Http\Requests\UpdateFaisalHomePageImageRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Repository\FaisalHomePageImageRepositoryInterface;

class FaisalHomePageImageService
{

    public function __construct(
        private readonly FaisalHomePageImageRepositoryInterface $faisalHomePageImageRepository,
        private readonly FileManagerService $fileManagerService
    )
    {
    }



    public function index(){

        $images = $this->faisalHomePageImageRepository->get('type','image');
        return view('admin.faisal_home_pages.images.index',compact('images'));
    }


    public function create(){

        return view('admin.faisal_home_pages.images.create');
    }

    public function store(StoreFaisalHomePageImageRequest $request)
    {

        $inputs = $request->only('image','type');

        if($request->hasFile('image')){

            $image = $this->fileManagerService->handle("image","faisal_home_pages/images");
            $inputs['image'] = $image;

        }

        $image =  $this->faisalHomePageImageRepository->create($inputs);
        $this->faisalHomePageImageRepository->multipleLanguages($image,$request,['title','description']);

        toastr()->success(__('dashboard.store'));

        return redirect()->route('images.index');
    }


    public function edit($id)
    {
        $image = $this->faisalHomePageImageRepository->getById($id);

        return view('admin.faisal_home_pages.images.edit',compact('image'));
    }


    public function update($id,UpdateFaisalHomePageImageRequest $request)
    {
        $image = $this->faisalHomePageImageRepository->getById($id);

        $inputs = $request->only('image');

        if($request->hasFile('image')){

            $image = $this->fileManagerService->handle("image","faisal_home_pages/images",$image->image);
            $inputs['image'] = $image;

        }

        $this->faisalHomePageImageRepository->update($image->id,$inputs);

        $this->faisalHomePageImageRepository->multipleLanguages($image,$request,['title','description']);

        toastr()->success(__('dashboard.update'));

        return redirect()->route('images.index');
    }


    public function delete($id)
    {
        $image = $this->faisalHomePageImageRepository->getById($id);
        $this->faisalHomePageImageRepository->delete($image->id);
        toastr()->error(__('dashboard.delete'));

        return redirect()->route('images.index');
    }



}
