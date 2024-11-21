<?php

namespace App\Http\Controllers\Dashboard\ChairmanOfTheBoard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ChairmanOfTheBoard\ChairmanOfTheBoardStoreRequest;
use App\Http\Requests\Dashboard\ChairmanOfTheBoard\ChairmanOfTheBoardUpdateRequest;
use App\Http\Services\Dashboard\AboutCenter\ChairmanOfTheBoardService;

class ChairmanOfTheBoardController extends Controller
{

    public function __construct(
      private readonly ChairmanOfTheBoardService $chairmanOfTheBoardService
    )
    {
    }

    public function index(){

        return $this->chairmanOfTheBoardService->index();
    }


    public function create(){

        return $this->chairmanOfTheBoardService->create();

    }

    public function store(ChairmanOfTheBoardStoreRequest $request)
    {

        return $this->chairmanOfTheBoardService->store($request);

    }

    public function edit($id)
    {
        return $this->chairmanOfTheBoardService->edit($id);

    }


    public function update(ChairmanOfTheBoardUpdateRequest $request,$id)
    {
        return $this->chairmanOfTheBoardService->update($request,$id);

    }


    public function destroy($id)
    {
        return $this->chairmanOfTheBoardService->destroy($id);

    }

}
