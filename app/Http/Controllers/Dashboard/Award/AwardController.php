<?php

namespace App\Http\Controllers\Dashboard\Award;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AboutChairmanOfTheBoard\AboutChairmanOfTheBoardRequest;
use App\Http\Services\Dashboard\AboutCenter\AwardService;

class AwardController extends Controller
{

    public function __construct(
       private readonly AwardService $awardService
    )
    {
    }


    public function index(){

        return $this->awardService->index();
    }


    public function create(){

        return $this->awardService->create();

    }

    public function store(AboutChairmanOfTheBoardRequest $request)
    {

        return $this->awardService->store($request);

    }


    public function edit($id)
    {

        return $this->awardService->edit($id);

    }


    public function update(AboutChairmanOfTheBoardRequest $request,$id)
    {

        return $this->awardService->update($request,$id);

    }


    public function destroy($id)
    {

        return $this->awardService->destroy($id);

    }
}
