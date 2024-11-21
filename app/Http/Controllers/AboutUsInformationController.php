<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutUsInformationStoreRequest;
use App\Http\Requests\AboutUsInformationUpdateRequest;
use App\Http\Services\Dashboard\AboutUsInformation\AboutUsInformationService;

class AboutUsInformationController extends Controller
{

    protected AboutUsInformationService $aboutUsInformationService;

    public function __construct(AboutUsInformationService $aboutUsInformationService)
    {
        $this->aboutUsInformationService = $aboutUsInformationService;
    }

    public function index()
    {
        return $this->aboutUsInformationService->index();
    }


    public function create()
    {
        return $this->aboutUsInformationService->create();

    }


    public function store(AboutUsInformationStoreRequest $request)
    {
        return $this->aboutUsInformationService->store($request);

    }



    public function edit($id)
    {
        return $this->aboutUsInformationService->edit($id);

    }


    public function update(AboutUsInformationUpdateRequest $request, $id)
    {
        return $this->aboutUsInformationService->update($request,$id);

    }


    public function delete($id)
    {
        return $this->aboutUsInformationService->delete($id);

    }

    
}
