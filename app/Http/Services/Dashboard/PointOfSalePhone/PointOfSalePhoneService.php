<?php

namespace App\Http\Services\Dashboard\PointOfSalePhone;
use App\Http\Requests\PointOfSalePhoneStoreRequest;
use App\Http\Requests\PointOfSalePhoneUpdateRequest;
use App\Repository\PointOfSalePhoneRepositoryInterface;

class PointOfSalePhoneService
{

    public function __construct(
        private readonly PointOfSalePhoneRepositoryInterface $pointOfSalePhoneRepository
    )
    {
    }


    public function getAllPhonesOfPointSale($id){

        $point_of_sale_phones = $this->pointOfSalePhoneRepository->get('point_of_sale_id',$id);
        return view('admin.point_of_sales.phones.index',compact('point_of_sale_phones','id'));
    }


    public function addPhone($id){

        return view('admin.point_of_sales.phones.create',compact('id'));
    }

    public function store(PointOfSalePhoneStoreRequest $request)
    {

        $this->pointOfSalePhoneRepository->create($request->validated());

        toastr()->success(__('dashboard.store'));

        return redirect()->route('point_of_sales.index');
    }


    public function edit($id)
    {
        $point_of_sale_phone = $this->pointOfSalePhoneRepository->getById($id);

        return view('admin.point_of_sales.phones.edit',compact('point_of_sale_phone'));
    }


    public function update(PointOfSalePhoneUpdateRequest $request, $id)
    {
        $point_of_sale_phone = $this->pointOfSalePhoneRepository->getById($id);

        $this->pointOfSalePhoneRepository->update($point_of_sale_phone->id,$request->validated());

        toastr()->success(__('dashboard.update'));

        return redirect()->route('point_of_sales.index');
    }


    public function delete($id)
    {
        $point_of_sale_phone = $this->pointOfSalePhoneRepository->getById($id);
        $this->pointOfSalePhoneRepository->delete($point_of_sale_phone->id);
        toastr()->error(__('dashboard.delete'));

        return redirect()->route('point_of_sales.index');
    }


}
