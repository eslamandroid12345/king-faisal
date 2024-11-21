<?php

namespace App\Http\Controllers\FaisalHomePage;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaisalHomePageVideoRequest;
use App\Http\Requests\UpdateFaisalHomePageVideoRequest;
use App\Http\Services\Dashboard\FaisalHomePage\FaisalHomePageVideoService;

class FaisalHomePageVideoController extends Controller
{

    protected FaisalHomePageVideoService $faisalHomePageVideoService;
    public function __construct(FaisalHomePageVideoService $faisalHomePageVideoService)
    {

        $this->faisalHomePageVideoService = $faisalHomePageVideoService;
    }



    public function index(){

        return $this->faisalHomePageVideoService->index();

    }


    public function create(){

        return $this->faisalHomePageVideoService->create();

    }

    public function store(StoreFaisalHomePageVideoRequest $request)
    {

        return $this->faisalHomePageVideoService->store($request);

    }


    public function edit($id)
    {

        return $this->faisalHomePageVideoService->edit($id);

    }


    public function update($id,UpdateFaisalHomePageVideoRequest $request)
    {

        return $this->faisalHomePageVideoService->update($id,$request);

    }


    public function delete($id)
    {

        return $this->faisalHomePageVideoService->delete($id);

    }

}
