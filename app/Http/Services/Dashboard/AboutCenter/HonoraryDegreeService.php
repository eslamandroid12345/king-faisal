<?php

namespace App\Http\Services\Dashboard\AboutCenter;

use App\Http\Requests\Dashboard\AboutChairmanOfTheBoard\AboutChairmanOfTheBoardRequest;
use App\Repository\HonoraryDegreeRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class HonoraryDegreeService
{


    public function __construct(
        private readonly HonoraryDegreeRepositoryInterface $honoraryDegreeRepository
    )
    {
    }


    public function index(){

        $honorary_degrees = $this->honoraryDegreeRepository->get('type','honorary_degree');
        return view('dashboard.about_center.honorary_degrees.index',compact('honorary_degrees'));
    }


    public function create(){

        return view('dashboard.about_center.honorary_degrees.create');
    }

    public function store(AboutChairmanOfTheBoardRequest $request): RedirectResponse
    {

        try {
            $inputs = $request->only('type');

            $honorary_degree = $this->honoraryDegreeRepository->create($inputs);
            $this->honoraryDegreeRepository->multipleLanguages($honorary_degree,$request,['title','description']);

            return redirect()->route('honorary_degrees.index')->with(['success' => __('dashboard.store')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function edit($id)
    {
        $honorary_degree = $this->honoraryDegreeRepository->getById($id);

        return view('dashboard.about_center.honorary_degrees.edit',compact('honorary_degree'));
    }


    public function update(AboutChairmanOfTheBoardRequest $request,$id): RedirectResponse
    {

        try {
            $honorary_degree = $this->honoraryDegreeRepository->getById($id);

            $inputs = $request->only('type');

            $this->honoraryDegreeRepository->update($honorary_degree->id,$inputs);
            $this->honoraryDegreeRepository->multipleLanguages($honorary_degree,$request,['title','description']);
            return redirect()->route('honorary_degrees.index')->with(['success' => __('dashboard.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function destroy($id): RedirectResponse
    {

        try {
            $this->honoraryDegreeRepository->delete($id);
            return redirect()->route('honorary_degrees.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


}
