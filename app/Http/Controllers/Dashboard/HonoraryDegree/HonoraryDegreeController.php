<?php

namespace App\Http\Controllers\Dashboard\HonoraryDegree;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AboutChairmanOfTheBoard\AboutChairmanOfTheBoardRequest;
use App\Http\Services\Dashboard\AboutCenter\HonoraryDegreeService;

class HonoraryDegreeController extends Controller
{

    public function __construct(
       private readonly HonoraryDegreeService $honoraryDegreeService
    )
    {
    }


    public function index(){

        return $this->honoraryDegreeService->index();
    }


    public function create(){

        return $this->honoraryDegreeService->create();

    }

    public function store(AboutChairmanOfTheBoardRequest $request)
    {

        return $this->honoraryDegreeService->store($request);

    }


    public function edit($id)
    {

        return $this->honoraryDegreeService->edit($id);

    }


    public function update(AboutChairmanOfTheBoardRequest $request,$id)
    {

        return $this->honoraryDegreeService->update($request,$id);

    }


    public function destroy($id)
    {

        return $this->honoraryDegreeService->destroy($id);

    }
}
