<?php

namespace App\Http\Controllers\FaisalHomePage;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaisalHomePageDocumentRequest;
use App\Http\Requests\UpdateFaisalHomePageDocumentRequest;
use App\Http\Services\Dashboard\FaisalHomePage\FaisalHomePageDocumentService;

class FaisalHomePageDocumentController extends Controller
{

    protected FaisalHomePageDocumentService $faisalHomePageDocumentService;

    public function __construct(FaisalHomePageDocumentService $faisalHomePageDocumentService)
    {
        $this->faisalHomePageDocumentService = $faisalHomePageDocumentService;
    }


    public function index(){

        return $this->faisalHomePageDocumentService->index();

    }


    public function create(){

        return $this->faisalHomePageDocumentService->create();

    }

    public function store(StoreFaisalHomePageDocumentRequest $request)
    {

        return $this->faisalHomePageDocumentService->store($request);

    }


    public function edit($id)
    {

        return $this->faisalHomePageDocumentService->edit($id);

    }


    public function update($id,UpdateFaisalHomePageDocumentRequest $request)
    {

        return $this->faisalHomePageDocumentService->update($id,$request);

    }


    public function delete($id)
    {

        return $this->faisalHomePageDocumentService->delete($id);

    }

}
