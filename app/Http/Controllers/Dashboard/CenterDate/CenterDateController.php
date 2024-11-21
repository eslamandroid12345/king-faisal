<?php

namespace App\Http\Controllers\Dashboard\CenterDate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AboutChairmanOfTheBoard\AboutChairmanOfTheBoardRequest;
use App\Http\Services\Dashboard\AboutCenter\CenterDateService;

class CenterDateController extends Controller
{

    public function __construct(
       private readonly CenterDateService $centerDateService
    )
    {
    }


    public function index(){

        return $this->centerDateService->index();
    }


    public function create(){

        return $this->centerDateService->create();

    }

    public function store(AboutChairmanOfTheBoardRequest $request)
    {

        return $this->centerDateService->store($request);

    }


    public function edit($id)
    {

        return $this->centerDateService->edit($id);

    }


    public function update(AboutChairmanOfTheBoardRequest $request,$id)
    {

        return $this->centerDateService->update($request,$id);

    }


    public function destroy($id)
    {

        return $this->centerDateService->destroy($id);

    }

}
