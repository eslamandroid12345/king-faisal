<?php

namespace App\Http\Services\Dashboard\FaisalHomePage;
use App\Http\Requests\StoreFaisalHomePageSoundRequest;
use App\Http\Requests\UpdateFaisalHomePageSoundRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Repository\FaisalHomePageSoundRepositoryInterface;

class FaisalHomePageSoundService
{

    public function __construct(
        private readonly FaisalHomePageSoundRepositoryInterface $faisalHomePageSoundRepository,
        private readonly FileManagerService $fileManagerService
    )
    {
    }

    public function index(){

        $sounds = $this->faisalHomePageSoundRepository->get('type','sound');
        return view('admin.faisal_home_pages.sounds.index',compact('sounds'));
    }


    public function create(){

        return view('admin.faisal_home_pages.sounds.create');
    }

    public function store(StoreFaisalHomePageSoundRequest $request)
    {

        $inputs = $request->only('image','type','sound_url');

        if($request->hasFile('image')){

            $image = $this->fileManagerService->handle("image","faisal_home_pages/sound_images");
            $inputs['image'] = $image;

        }

        $sound =  $this->faisalHomePageSoundRepository->create($inputs);
        $this->faisalHomePageSoundRepository->multipleLanguages($sound,$request,['title']);

        toastr()->success(__('dashboard.store'));

        return redirect()->route('sounds.index');
    }


    public function edit($id)
    {
        $sound = $this->faisalHomePageSoundRepository->getById($id);

        return view('admin.faisal_home_pages.sounds.edit',compact('sound'));
    }


    public function update($id,UpdateFaisalHomePageSoundRequest $request)
    {
        $sound = $this->faisalHomePageSoundRepository->getById($id);

        $inputs = $request->only('image','sound_url');

        if($request->hasFile('image')){

            $image = $this->fileManagerService->handle("image","faisal_home_pages/sound_images",$sound->image);
            $inputs['image'] = $image;

        }

        $this->faisalHomePageSoundRepository->update($sound->id,$inputs);

        $this->faisalHomePageSoundRepository->multipleLanguages($sound,$request,['title']);

        toastr()->success(__('dashboard.update'));

        return redirect()->route('sounds.index');
    }


    public function delete($id)
    {
        $sound = $this->faisalHomePageSoundRepository->getById($id);
        $this->faisalHomePageSoundRepository->delete($sound->id);
        toastr()->error(__('dashboard.delete'));

        return redirect()->route('sounds.index');
    }
}
