<?php

namespace App\Http\Controllers\Dashboard\AboutUsInformation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AboutUsInformation\AboutUsInformationStoreRequest;
use App\Http\Requests\Dashboard\AboutUsInformation\AboutUsInformationUpdateRequest;
use App\Http\Services\Dashboard\AboutUsInformation\AboutUsInformationService;

class AboutUsInformationController extends Controller
{

    public function __construct(
      private readonly AboutUsInformationService $aboutUsInformationService
    )
    {
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


    public function destroy($id)
    {
        return $this->aboutUsInformationService->destroy($id);

    }


}
