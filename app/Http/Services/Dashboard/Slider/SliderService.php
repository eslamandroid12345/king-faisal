<?php

namespace App\Http\Services\Dashboard\Slider;
use App\Http\Requests\Dashboard\Slider\SliderStoreRequest;
use App\Http\Requests\Dashboard\Slider\SliderUpdateRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Repository\SliderRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class SliderService
{

    public function __construct(
        private readonly SliderRepositoryInterface $sliderRepository,
        private readonly FileManagerService $fileManagerService
    )
    {
    }

    public function index(){

        $sliders = $this->sliderRepository->paginate();
        return view('dashboard.sliders.index',compact('sliders'));
    }


    public function create(){

        return view('dashboard.sliders.create');
    }

    public function store(SliderStoreRequest $request): RedirectResponse
    {

        try {

            $inputs = $request->validated();

            if($request->hasFile('background_image')){

                $image = $this->fileManagerService->handle("background_image","sliders/images");
                $inputs['background_image'] = $image;

            }
            $this->sliderRepository->create($inputs);
            return redirect()->route('sliders.index')->with(['success' => __('dashboard.store')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function edit($id)
    {
        $slider = $this->sliderRepository->getById($id);

        return view('dashboard.sliders.edit',compact('slider'));
    }


    public function update($id,SliderUpdateRequest $request): RedirectResponse
    {
        try {
            $slider = $this->sliderRepository->getById($id);

            $inputs = $request->validated();

            if($request->hasFile('background_image')){

                $image = $this->fileManagerService->handle("background_image","admins/images",$slider->background_image);
                $inputs['background_image'] = $image;

            }

            $this->sliderRepository->update($slider->id,$inputs);

            return redirect()->route('sliders.index')->with(['success' => __('dashboard.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function destroy($id): RedirectResponse
    {

        try {
            $this->sliderRepository->delete($id);
            return redirect()->route('sliders.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }



}
