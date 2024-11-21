<?php

namespace App\Http\Services\Dashboard\FaisalHome;
use App\Http\Requests\FaisalHomeRequest;
use App\Repository\FaisalHomeRepositoryInterface;

class FaisalHomeService
{

    public function __construct(
        private readonly  FaisalHomeRepositoryInterface $faisalHomeRepository
    )
    {
    }


    public function edit()
    {
        $faisal_home = $this->faisalHomeRepository->getFirst();

        return view('admin.faisal_home.edit',compact('faisal_home'));
    }


    public function update($id,FaisalHomeRequest $request)
    {
        $faisal_home = $this->faisalHomeRepository->getById($id);

        $this->faisalHomeRepository->update($faisal_home->id,[]);
        $this->faisalHomeRepository->multipleLanguages($faisal_home,$request,['content']);

        toastr()->success(__('dashboard.update'));

            return redirect()->back();


    }



}
