<?php

namespace App\Http\Controllers\Dashboard\Aspiration;
use App\Http\Controllers\Controller;
use App\Http\Services\Dashboard\Vision\VisionService;
use App\Http\Requests\Dashboard\Aspiration\AspirationStoreRequest;
use App\Http\Requests\Dashboard\Aspiration\AspirationUpdateRequest;

class VisionController extends Controller
{

    public function __construct(
      private readonly VisionService $visionService
    )
    {
    }


    public function index(){

        return $this->visionService->index();

    }


    public function create(){

        return $this->visionService->create();

    }

    public function store(AspirationStoreRequest $request)
    {

        return $this->visionService->store($request);

    }


    public function edit($id)
    {

        return $this->visionService->edit($id);

    }


    public function update(AspirationUpdateRequest $request,$id)
    {
        return $this->visionService->update($request,$id);

    }


    public function destroy($id)
    {
        return $this->visionService->destroy($id);

    }

}
