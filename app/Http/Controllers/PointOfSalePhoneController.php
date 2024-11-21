<?php

namespace App\Http\Controllers;

use App\Http\Requests\PointOfSalePhoneStoreRequest;
use App\Http\Requests\PointOfSalePhoneUpdateRequest;
use App\Http\Services\Dashboard\PointOfSalePhone\PointOfSalePhoneService;

class PointOfSalePhoneController extends Controller
{

    protected PointOfSalePhoneService $pointOfSalePhoneService;

    public function __construct(PointOfSalePhoneService $pointOfSalePhoneService)
    {
        $this->pointOfSalePhoneService = $pointOfSalePhoneService;
    }


    public function getAllPhonesOfPointSale($id){

      return $this->pointOfSalePhoneService->getAllPhonesOfPointSale($id);
    }


    public function addPhone($id){

        return $this->pointOfSalePhoneService->addPhone($id);

    }

    public function store(PointOfSalePhoneStoreRequest $request)
    {

        return $this->pointOfSalePhoneService->store($request);

    }


    public function edit($id)
    {

        return $this->pointOfSalePhoneService->edit($id);

    }


    public function update(PointOfSalePhoneUpdateRequest $request, $id)
    {

        return $this->pointOfSalePhoneService->update($request,$id);

    }


    public function delete($id)
    {

        return $this->pointOfSalePhoneService->delete($id);

    }

}
