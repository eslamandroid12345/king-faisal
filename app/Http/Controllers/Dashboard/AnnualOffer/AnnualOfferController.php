<?php

namespace App\Http\Controllers\Dashboard\AnnualOffer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AnnualOffer\AnnualOfferStoreRequest;
use App\Http\Requests\Dashboard\AnnualOffer\AnnualOfferUpdateRequest;
use App\Http\Services\Dashboard\MediaCenterDepartment\AnnualOfferService;

class AnnualOfferController extends Controller
{
    public function __construct(
        private readonly AnnualOfferService $annualOfferService
    )
    {
    }


    public function index(){

        return  $this->annualOfferService->index();

    }


    public function create(){

        return  $this->annualOfferService->create();

    }

    public function store(AnnualOfferStoreRequest $request)
    {

        return  $this->annualOfferService->store($request);

    }


    public function edit($id)
    {

        return  $this->annualOfferService->edit($id);

    }


    public function update(AnnualOfferUpdateRequest $request,$id)
    {
        return  $this->annualOfferService->update($request,$id);

    }


    public function destroy($id)
    {
        return  $this->annualOfferService->destroy($id);

    }
}
