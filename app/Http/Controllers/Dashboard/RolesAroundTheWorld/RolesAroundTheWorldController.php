<?php

namespace App\Http\Controllers\Dashboard\RolesAroundTheWorld;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\RolesAroundTheWorld\RolesAroundTheWorldSectionsRequest;
use App\Http\Services\Dashboard\AboutCenter\RolesAroundTheWorldService;

class RolesAroundTheWorldController extends Controller
{

    public function __construct(
       private readonly RolesAroundTheWorldService $rolesAroundTheWorldService
    )
    {
    }


    public function index(){

        return  $this->rolesAroundTheWorldService->index();

    }


    public function create(){

        return  $this->rolesAroundTheWorldService->create();

    }

    public function store(RolesAroundTheWorldSectionsRequest $request)
    {

        return  $this->rolesAroundTheWorldService->store($request);

    }


    public function edit($id)
    {
        return  $this->rolesAroundTheWorldService->edit($id);

    }


    public function update(RolesAroundTheWorldSectionsRequest $request,$id)
    {

        return  $this->rolesAroundTheWorldService->update($request,$id);

    }


    public function destroy($id)
    {

        return  $this->rolesAroundTheWorldService->destroy($id);
    }

}
