<?php

namespace App\Http\Services\Dashboard\MediaCenterDepartment;
use App\Http\Requests\Dashboard\MediaCenterVideo\VideoStoreRequest;
use App\Http\Requests\Dashboard\MediaCenterVideo\VideoUpdateRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Repository\VideoRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class VideoService
{

    public function __construct(
       private readonly VideoRepositoryInterface $videoRepository,
       private readonly FileManagerService $fileManagerService
    )
    {
    }


    public function index(){

        $videos = $this->videoRepository->get('type','video');
        return view('dashboard.videos.index',compact('videos'));
    }


    public function create(){

        return view('dashboard.videos.create');
    }

    public function store(VideoStoreRequest $request): RedirectResponse
    {

        try {

            $inputs = $request->only('image_url', 'type', 'video_url', 'published_date');

            if($request->hasFile('image_url')){

                $image = $this->fileManagerService->handle("image_url","media_center_departments/images/videos");
                $inputs['image_url'] = $image;

            }

            $video = $this->videoRepository->create($inputs);
            $this->videoRepository->multipleLanguages($video,$request,['title','description']);
            return redirect()->route('media_center_videos.index')->with(['success' => __('dashboard.store')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function edit($id)
    {
        $video = $this->videoRepository->getById($id);

        return view('dashboard.videos.edit',compact('video'));
    }


    public function update(VideoUpdateRequest $request,$id): RedirectResponse
    {

        try {

            $video = $this->videoRepository->getById($id);

            $inputs = $request->only('image_url', 'video_url', 'published_date',);

            if($request->hasFile('image_url')){

                $image = $this->fileManagerService->handle("image_url","media_center_departments/images/videos",$video->image_url);
                $inputs['image_url'] = $image;

            }

            $this->videoRepository->update($video->id,$inputs);
            $this->videoRepository->multipleLanguages($video,$request,['title','description']);
            return redirect()->route('media_center_videos.index')->with(['success' => __('dashboard.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function destroy($id): RedirectResponse
    {

        try {
            $this->videoRepository->delete($id);
            return redirect()->route('media_center_videos.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


}
