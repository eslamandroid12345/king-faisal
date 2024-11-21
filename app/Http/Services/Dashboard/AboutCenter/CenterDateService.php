<?php

namespace App\Http\Services\Dashboard\AboutCenter;

use App\Http\Requests\Dashboard\AboutChairmanOfTheBoard\AboutChairmanOfTheBoardRequest;
use App\Repository\CenterDateRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class CenterDateService
{


    public function __construct(
        private readonly CenterDateRepositoryInterface $centerDateRepository
    )
    {
    }


    public function index(){

        $center_dates = $this->centerDateRepository->get('type','center_date');
        return view('dashboard.about_center.center_dates.index',compact('center_dates'));
    }


    public function create(){

        return view('dashboard.about_center.center_dates.create');
    }

    public function store(AboutChairmanOfTheBoardRequest $request)
    {

        try {
            $inputs = $request->only('type');

            $center_date = $this->centerDateRepository->create($inputs);
            $this->centerDateRepository->multipleLanguages($center_date,$request,['title','description']);

            return redirect()->route('center_dates.index')->with(['success' => __('dashboard.store')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function edit($id)
    {
        $center_date = $this->centerDateRepository->getById($id);

        return view('dashboard.about_center.center_dates.edit',compact('center_date'));
    }


    public function update(AboutChairmanOfTheBoardRequest $request,$id): RedirectResponse
    {

        try {
            $center_date = $this->centerDateRepository->getById($id);

            $inputs = $request->only('type');

            $this->centerDateRepository->update($center_date->id,$inputs);
            $this->centerDateRepository->multipleLanguages($center_date,$request,['title','description']);

            return redirect()->route('center_dates.index')->with(['success' => __('dashboard.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function destroy($id): RedirectResponse
    {

        try {
            $this->centerDateRepository->delete($id);
            return redirect()->route('center_dates.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }

}
