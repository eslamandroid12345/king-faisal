<?php

namespace App\Http\Controllers\FaisalHomePage;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaisalHomePageSoundRequest;
use App\Http\Requests\UpdateFaisalHomePageSoundRequest;
use App\Http\Services\Dashboard\FaisalHomePage\FaisalHomePageSoundService;

class FaisalHomePageSoundController extends Controller
{

    protected FaisalHomePageSoundService $faisalHomePageSoundService;
    public function __construct(FaisalHomePageSoundService $faisalHomePageSoundService)
    {

        $this->faisalHomePageSoundService = $faisalHomePageSoundService;
    }



    public function index(){

        return $this->faisalHomePageSoundService->index();

    }


    public function create(){

        return $this->faisalHomePageSoundService->create();

    }

    public function store(StoreFaisalHomePageSoundRequest $request)
    {

        return $this->faisalHomePageSoundService->store($request);

    }


    public function edit($id)
    {

        return $this->faisalHomePageSoundService->edit($id);

    }


    public function update($id,UpdateFaisalHomePageSoundRequest $request)
    {

        return $this->faisalHomePageSoundService->update($id,$request);

    }


    public function delete($id)
    {

        return $this->faisalHomePageSoundService->delete($id);

    }

}
