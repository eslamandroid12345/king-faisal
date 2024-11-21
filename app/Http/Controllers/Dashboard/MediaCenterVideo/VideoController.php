<?php

namespace App\Http\Controllers\Dashboard\MediaCenterVideo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\MediaCenterVideo\VideoStoreRequest;
use App\Http\Requests\Dashboard\MediaCenterVideo\VideoUpdateRequest;
use App\Http\Services\Dashboard\MediaCenterDepartment\VideoService;

class VideoController extends Controller
{

    public function __construct(
       private readonly VideoService $videoService
    )
    {
    }


    public function index(){

     return  $this->videoService->index();

    }


    public function create(){

        return  $this->videoService->create();

    }

    public function store(VideoStoreRequest $request)
    {

        return  $this->videoService->store($request);

    }


    public function edit($id)
    {

        return  $this->videoService->edit($id);

    }


    public function update(VideoUpdateRequest $request,$id)
    {
        return  $this->videoService->update($request,$id);

    }


    public function destroy($id)
    {
        return  $this->videoService->destroy($id);

    }

}
