<?php

namespace App\Http\Services\Dashboard\City;
use App\Http\Requests\CityStoreAndUpdateRequest;
use App\Repository\CityRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class CityService
{

    public function __construct(
        private readonly CityRepositoryInterface $cityRepository
    )
    {
    }


    public function index(){

        $cities = $this->cityRepository->paginate();
        return view('admin.cities.index',compact('cities'));
    }


    public function create(){

        return view('admin.cities.create');
    }

    public function store(CityStoreAndUpdateRequest $request)
    {

        $city = $this->cityRepository->create([]);
        $this->cityRepository->multipleLanguages($city,$request,['name']);

        toastr()->success(__('dashboard.store'));

        return redirect()->route('cities.index');
    }


    public function edit($id)
    {
        $city = $this->cityRepository->getById($id);

        return view('admin.cities.edit',compact('city'));
    }


    public function update(CityStoreAndUpdateRequest $request,$id)
    {
        $city = $this->cityRepository->getById($id);

        $this->cityRepository->update($city->id,[]);
        $this->cityRepository->multipleLanguages($city,$request,['name']);


        toastr()->success(__('dashboard.update'));

        return redirect()->route('cities.index');
    }


    public function delete($id)
    {
        $city = $this->cityRepository->getById($id);
        $this->cityRepository->delete($city->id);
        toastr()->error(__('dashboard.delete'));

        return redirect()->route('cities.index');
    }






}
