<?php

namespace App\Http\Services\Dashboard\FaisalHomePage;
use App\Http\Requests\StoreFaisalHomePageVideoRequest;
use App\Http\Requests\UpdateFaisalHomePageVideoRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Repository\FaisalHomePageVideoRepositoryInterface;

class FaisalHomePageVideoService
{

    public function __construct(
        private readonly FaisalHomePageVideoRepositoryInterface $faisalHomePageVideoRepository,
        private readonly FileManagerService $fileManagerService
    )
    {
    }

    public function index(){

        $videos = $this->faisalHomePageVideoRepository->get('type','video');
        return view('admin.faisal_home_pages.videos.index',compact('videos'));
    }


    public function create(){

        return view('admin.faisal_home_pages.videos.create');
    }

    public function store(StoreFaisalHomePageVideoRequest $request)
    {

        $inputs = $request->only('image','type','video_url');

        if($request->hasFile('image')){

            $image = $this->fileManagerService->handle("image","faisal_home_pages/video_images");
            $inputs['image'] = $image;

        }

        $video =  $this->faisalHomePageVideoRepository->create($inputs);
        $this->faisalHomePageVideoRepository->multipleLanguages($video,$request,['title','description']);

        toastr()->success(__('dashboard.store'));

        return redirect()->route('videos.index');
    }


    public function edit($id)
    {
        $video = $this->faisalHomePageVideoRepository->getById($id);

        return view('admin.faisal_home_pages.videos.edit',compact('video'));
    }


    public function update($id,UpdateFaisalHomePageVideoRequest $request)
    {
        $video = $this->faisalHomePageVideoRepository->getById($id);

        $inputs = $request->only('image','video_url');

        if($request->hasFile('image')){

            $image = $this->fileManagerService->handle("image","faisal_home_pages/video_images",$video->image);
            $inputs['image'] = $image;

        }

        $this->faisalHomePageVideoRepository->update($video->id,$inputs);

        $this->faisalHomePageVideoRepository->multipleLanguages($video,$request,['title','description']);

        toastr()->success(__('dashboard.update'));

        return redirect()->route('videos.index');
    }


    public function delete($id)
    {
        $video = $this->faisalHomePageVideoRepository->getById($id);
        $this->faisalHomePageVideoRepository->delete($video->id);
        toastr()->error(__('dashboard.delete'));

        return redirect()->route('videos.index');
    }

}
