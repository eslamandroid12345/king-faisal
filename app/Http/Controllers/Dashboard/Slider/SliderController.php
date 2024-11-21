<?php

namespace App\Http\Controllers\Dashboard\Slider;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Slider\SliderStoreRequest;
use App\Http\Requests\Dashboard\Slider\SliderUpdateRequest;
use App\Http\Services\Dashboard\Slider\SliderService;

class SliderController extends Controller
{

    public function __construct(
       private readonly SliderService $sliderService
    )
    {
    }

    public function index()
    {
        return $this->sliderService->index();
    }


    public function create()
    {
        return $this->sliderService->create();

    }


    public function store(SliderStoreRequest $request)
    {
        return $this->sliderService->store($request);

    }



    public function edit($id)
    {
        return $this->sliderService->edit($id);

    }


    public function update($id,SliderUpdateRequest $request)
    {
        return $this->sliderService->update($id,$request);

    }


    public function destroy($id)
    {
        return $this->sliderService->destroy($id);

    }

}
