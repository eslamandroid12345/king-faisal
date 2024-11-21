<?php

namespace App\Http\Services\Dashboard\PointOfSale;

use App\Http\Requests\PointOfSaleStoreAndUpdateRequest;
use App\Repository\PointOfSaleRepositoryInterface;

class PointOfSaleService
{

    public function __construct(
        private readonly PointOfSaleRepositoryInterface $pointOfSaleRepository
    )
    {
    }


    public function index(){

        $point_of_sales = $this->pointOfSaleRepository->paginate();
        return view('admin.point_of_sales.index',compact('point_of_sales'));
    }


    public function create(){

        $cities = $this->pointOfSaleRepository->getAllCities();
        return view('admin.point_of_sales.create',compact('cities',));
    }

    public function store(PointOfSaleStoreAndUpdateRequest $request)
    {

        $inputs = $request->only('city_id');


        $point_of_sale = $this->pointOfSaleRepository->create($inputs);
        $this->pointOfSaleRepository->multipleLanguages($point_of_sale,$request,['name','description']);

        toastr()->success(__('dashboard.store'));

        return redirect()->route('point_of_sales.index');
    }


    public function edit($id)
    {
        $point_of_sale = $this->pointOfSaleRepository->getById($id);

        $cities = $this->pointOfSaleRepository->getAllCities();

        return view('admin.point_of_sales.edit',compact('point_of_sale','cities'));
    }


    public function update(PointOfSaleStoreAndUpdateRequest $request,$id)
    {
        $point_of_sale = $this->pointOfSaleRepository->getById($id);
        $inputs = $request->only('city_id');

        $this->pointOfSaleRepository->update($point_of_sale->id,$inputs);
        $this->pointOfSaleRepository->multipleLanguages($point_of_sale,$request,['name','description']);

        toastr()->success(__('dashboard.update'));

        return redirect()->route('point_of_sales.index');
    }


    public function delete($id)
    {
        $point_of_sale = $this->pointOfSaleRepository->getById($id);
        $this->pointOfSaleRepository->delete($point_of_sale->id);
        toastr()->error(__('dashboard.delete'));

        return redirect()->route('point_of_sales.index');
    }


}
