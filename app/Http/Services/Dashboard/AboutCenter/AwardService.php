<?php

namespace App\Http\Services\Dashboard\AboutCenter;

use App\Http\Requests\Dashboard\AboutChairmanOfTheBoard\AboutChairmanOfTheBoardRequest;
use App\Repository\AwardRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class AwardService
{

    public function __construct(
       private readonly AwardRepositoryInterface $awardRepository
    )
    {
    }


    public function index(){

        $awards = $this->awardRepository->get('type','award');
        return view('dashboard.about_center.awards.index',compact('awards'));
    }


    public function create(){

        return view('dashboard.about_center.awards.create');
    }

    public function store(AboutChairmanOfTheBoardRequest $request): RedirectResponse
    {

        try {
            $inputs = $request->only('type');

            $award = $this->awardRepository->create($inputs);
            $this->awardRepository->multipleLanguages($award,$request,['title','description']);

            return redirect()->route('awards.index')->with(['success' => __('dashboard.store')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function edit($id)
    {
        $award = $this->awardRepository->getById($id);

        return view('dashboard.about_center.awards.edit',compact('award'));
    }


    public function update(AboutChairmanOfTheBoardRequest $request,$id): RedirectResponse
    {

        try {
            $award = $this->awardRepository->getById($id);

            $inputs = $request->only('type');

            $this->awardRepository->update($award->id,$inputs);
            $this->awardRepository->multipleLanguages($award,$request,['title','description']);

            return redirect()->route('awards.index')->with(['success' => __('dashboard.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function destroy($id): RedirectResponse
    {

        try {
            $this->awardRepository->delete($id);
            return redirect()->route('awards.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }

}
