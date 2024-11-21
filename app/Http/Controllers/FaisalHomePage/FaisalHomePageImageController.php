<?php

namespace App\Http\Controllers\FaisalHomePage;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaisalHomePageImageRequest;
use App\Http\Requests\UpdateFaisalHomePageImageRequest;
use App\Http\Services\Dashboard\FaisalHomePage\FaisalHomePageImageService;

class FaisalHomePageImageController extends Controller
{
    protected FaisalHomePageImageService $faisalHomePageImageService;
    public function __construct(FaisalHomePageImageService $faisalHomePageImageService)
    {

        $this->faisalHomePageImageService = $faisalHomePageImageService;
    }



    public function index(){

        return $this->faisalHomePageImageService->index();

    }


    public function create(){

        return $this->faisalHomePageImageService->create();

    }

    public function store(StoreFaisalHomePageImageRequest $request)
    {

        return $this->faisalHomePageImageService->store($request);

    }


    public function edit($id)
    {

        return $this->faisalHomePageImageService->edit($id);

    }


    public function update($id,UpdateFaisalHomePageImageRequest $request)
    {

        return $this->faisalHomePageImageService->update($id,$request);

    }


    public function delete($id)
    {

        return $this->faisalHomePageImageService->delete($id);

    }


}
