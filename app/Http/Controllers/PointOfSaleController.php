<?php

namespace App\Http\Controllers;

use App\Http\Requests\PointOfSaleStoreAndUpdateRequest;
use App\Http\Services\Dashboard\PointOfSale\PointOfSaleService;

class PointOfSaleController extends Controller
{

    protected PointOfSaleService $pointOfSaleService;

    public function __construct(PointOfSaleService $pointOfSaleService)
    {

        $this->pointOfSaleService = $pointOfSaleService;
    }

    public function index(){

        return $this->pointOfSaleService->index();
    }


    public function create(){

        return $this->pointOfSaleService->create();

    }

    public function store(PointOfSaleStoreAndUpdateRequest $request)
    {

        return $this->pointOfSaleService->store($request);

    }


    public function edit($id)
    {
        return $this->pointOfSaleService->edit($id);

    }


    public function update(PointOfSaleStoreAndUpdateRequest $request,$id)
    {
        return $this->pointOfSaleService->update($request,$id);

    }


    public function delete($id)
    {

        return $this->pointOfSaleService->delete($id);

    }


}
