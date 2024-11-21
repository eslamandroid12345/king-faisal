<?php

namespace App\Http\Controllers\Dashboard\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\News\NewStoreRequest;
use App\Http\Requests\Dashboard\News\NewUpdateRequest;
use App\Http\Services\Dashboard\MediaCenterDepartment\NewService;
use Illuminate\Http\RedirectResponse;

class NewController extends Controller
{

    public function __construct(
      private readonly NewService $newService
    )
    {
    }


    public function index(){

        return  $this->newService->index();

    }


    public function create(){

        return  $this->newService->create();

    }

    public function store(NewStoreRequest $request): RedirectResponse
    {

        return  $this->newService->store($request);

    }


    public function edit($id)
    {

        return  $this->newService->edit($id);

    }


    public function update(NewUpdateRequest $request,$id): RedirectResponse
    {
        return  $this->newService->update($request,$id);

    }


    public function destroy($id): RedirectResponse
    {
        return  $this->newService->destroy($id);

    }

}
