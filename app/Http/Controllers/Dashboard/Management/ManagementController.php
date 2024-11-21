<?php

namespace App\Http\Controllers\Dashboard\Management;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Management\ManagementStoreRequest;
use App\Http\Requests\Dashboard\Management\ManagementUpdateRequest;
use App\Http\Services\Dashboard\AboutCenter\ManagementService;

class ManagementController extends Controller
{

    public function __construct(
       private readonly ManagementService $managementService
    )
    {
    }


    public function index(){

        return  $this->managementService->index();
    }


    public function create(){

        return  $this->managementService->create();


    }

    public function store(ManagementStoreRequest $request)
    {

        return  $this->managementService->store($request);

    }


    public function edit($id)
    {

        return  $this->managementService->edit($id);

    }


    public function update(ManagementUpdateRequest $request,$id)
    {

        return  $this->managementService->update($request,$id);


    }


    public function destroy($id)
    {

        return  $this->managementService->destroy($id);

    }
}
