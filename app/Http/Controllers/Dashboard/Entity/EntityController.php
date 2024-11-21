<?php

namespace App\Http\Controllers\Dashboard\Entity;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Entity\EntityRequest;
use App\Http\Services\Dashboard\Entity\EntityService;

class EntityController extends Controller
{

    public function __construct(
       private readonly EntityService $entityService
    )
    {
    }

    public function index()
    {
        return $this->entityService->index();
    }


    public function create()
    {
        return $this->entityService->create();

    }


    public function store(EntityRequest $request)
    {
        return $this->entityService->store($request);

    }



    public function edit($id)
    {
        return $this->entityService->edit($id);

    }


    public function update(EntityRequest $request, $id)
    {
        return $this->entityService->update($request,$id);

    }


    public function destroy($id)
    {
        return $this->entityService->delete($id);

    }
}
