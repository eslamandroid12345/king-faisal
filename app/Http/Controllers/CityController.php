<?php

namespace App\Http\Controllers;
use App\Http\Requests\CityStoreAndUpdateRequest;
use App\Http\Services\Dashboard\City\CityService;

class CityController extends Controller
{
    protected CityService $cityService;

    public function __construct(CityService $cityService)
    {
        $this->cityService = $cityService;
    }

    public function index()
    {
        return $this->cityService->index();
    }


    public function create()
    {
        return $this->cityService->create();

    }


    public function store(CityStoreAndUpdateRequest $request)
    {
        return $this->cityService->store($request);

    }



    public function edit($id)
    {
        return $this->cityService->edit($id);

    }


    public function update(CityStoreAndUpdateRequest $request, $id)
    {
        return $this->cityService->update($request,$id);

    }


    public function delete($id)
    {
        return $this->cityService->delete($id);

    }

}
