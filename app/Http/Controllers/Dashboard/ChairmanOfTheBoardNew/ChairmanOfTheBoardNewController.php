<?php

namespace App\Http\Controllers\Dashboard\ChairmanOfTheBoardNew;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ChairmanOfTheBoardNews\ChairmanOfTheBoardNewStoreRequest;
use App\Http\Requests\Dashboard\ChairmanOfTheBoardNews\ChairmanOfTheBoardNewUpdateRequest;
use App\Http\Services\Dashboard\AboutCenter\ChairmanOfTheBoardNewService;

class ChairmanOfTheBoardNewController extends Controller
{

    public function __construct(
      private readonly ChairmanOfTheBoardNewService $chairmanOfTheBoardNewService
    )
    {
    }


    public function index(){

        return $this->chairmanOfTheBoardNewService->index();
    }


    public function create(){

        return $this->chairmanOfTheBoardNewService->create();
    }

    public function store(ChairmanOfTheBoardNewStoreRequest $request)
    {

        return $this->chairmanOfTheBoardNewService->store($request);

    }


    public function edit($id)
    {

        return $this->chairmanOfTheBoardNewService->edit($id);

    }


    public function update(ChairmanOfTheBoardNewUpdateRequest $request,$id)
    {

        return $this->chairmanOfTheBoardNewService->update($request,$id);

    }


    public function destroy($id)
    {

        return $this->chairmanOfTheBoardNewService->destroy($id);

    }
}
