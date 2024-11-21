<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReferenceRequest;
use App\Http\Services\Dashboard\Reference\ReferenceService;

class ReferenceController extends Controller
{
    protected ReferenceService $referenceService;
    public function __construct(ReferenceService $referenceService)
    {
        $this->referenceService = $referenceService;
    }



    public function index($id){


        return $this->referenceService->index($id);
    }


    public function create($id){

        return $this->referenceService->create($id);

    }

    public function store(ReferenceRequest $request)
    {

        return $this->referenceService->store($request);


    }


    public function delete($id)
    {

        return $this->referenceService->delete($id);

    }
}
