<?php

namespace App\Http\Services\Dashboard\Vision;

use App\Http\Services\Mutual\FileManagerService;
use App\Repository\VisionRepositoryInterface;
use App\Http\Requests\Dashboard\Aspiration\AspirationStoreRequest;
use App\Http\Requests\Dashboard\Aspiration\AspirationUpdateRequest;


class VisionService
{

    public function __construct(
        private readonly VisionRepositoryInterface $visionRepository,
       private readonly FileManagerService $fileManagerService
    )
    {
    }

    public function index(){

        $visions = $this->visionRepository->get('type','vision');
        return view('dashboard.visions.index',compact('visions'));
    }


    public function create(){

        return view('dashboard.visions.create');
    }

    public function store(AspirationStoreRequest $request)
    {

        try {

            $inputs = $request->only('icon','type');

            if($request->hasFile('icon')){

                $image = $this->fileManagerService->handle("icon","visions/images");
                $inputs['icon'] = $image;

            }
            $inputs['type'] = 'vision';
            $vision = $this->visionRepository->create($inputs);
            $this->visionRepository->multipleLanguages($vision,$request,['title','description']);
            return redirect()->route('visions.index')->with(['success' => __('dashboard.store')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function edit($id)
    {
        $vision = $this->visionRepository->getById($id);

        return view('dashboard.visions.edit',compact('vision'));
    }


    public function update(AspirationUpdateRequest $request,$id)
    {

        try {

            $vision = $this->visionRepository->getById($id);
            $inputs = $request->only('icon','type');

            if($request->hasFile('icon')){

                $image = $this->fileManagerService->handle("icon","visions/images",$vision->icon);
                $inputs['icon'] = $image;

            }
            $this->visionRepository->update($vision->id,$inputs);
            $this->visionRepository->multipleLanguages($vision,$request,['title','description']);

            return redirect()->route('visions.index')->with(['success' => __('dashboard.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function destroy($id)
    {

        try {
            $this->visionRepository->delete($id);
            return redirect()->route('visions.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


}
