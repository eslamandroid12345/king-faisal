<?php

namespace App\Http\Controllers\Dashboard\Aspiration;
use App\Http\Controllers\Controller;
use App\Http\Services\Dashboard\Value\ValueService;
use App\Http\Requests\Dashboard\Aspiration\AspirationStoreRequest;
use App\Http\Requests\Dashboard\Aspiration\AspirationUpdateRequest;

class ValueController extends Controller
{

    public function __construct(
        private readonly ValueService $valueService
    )
    {
    }


    public function index(){

        return $this->valueService->index();

    }


    public function create(){

        return $this->valueService->create();

    }

    public function store(AspirationStoreRequest $request)
    {

        return $this->valueService->store($request);

    }


    public function edit($id)
    {

        return $this->valueService->edit($id);

    }


    public function update(AspirationUpdateRequest $request,$id)
    {
        return $this->valueService->update($request,$id);

    }


    public function destroy($id)
    {
        return $this->valueService->destroy($id);

    }

}
