<?php

namespace App\Http\Services\Dashboard\Value;

use App\Http\Services\Mutual\FileManagerService;
use App\Repository\ValueRepositoryInterface;
use App\Http\Requests\Dashboard\Aspiration\AspirationStoreRequest;
use App\Http\Requests\Dashboard\Aspiration\AspirationUpdateRequest;
use Illuminate\Http\RedirectResponse;

class ValueService
{

    public function __construct(
        private readonly ValueRepositoryInterface $valueRepository,
        private readonly FileManagerService $fileManagerService
    )
    {
    }


    public function index(){

        $values = $this->valueRepository->get('type','value');
        return view('dashboard.values.index',compact('values'));
    }


    public function create(){

        return view('dashboard.values.create');
    }

    public function store(AspirationStoreRequest $request): RedirectResponse
    {

        try {

            $inputs = $request->only('icon','type');

            if($request->hasFile('icon')){

                $image = $this->fileManagerService->handle("icon","values/images");
                $inputs['icon'] = $image;

            }
            $inputs['type'] = 'value';
            $value = $this->valueRepository->create($inputs);
            $this->valueRepository->multipleLanguages($value,$request,['title','description']);
            return redirect()->route('values.index')->with(['success' => __('dashboard.store')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function edit($id)
    {
        $value = $this->valueRepository->getById($id);

        return view('dashboard.values.edit',compact('value'));
    }


    public function update(AspirationUpdateRequest $request,$id): RedirectResponse
    {
        try {

            $value = $this->valueRepository->getById($id);
            $inputs = $request->only('icon','type');

            if($request->hasFile('icon')){

                $image = $this->fileManagerService->handle("icon","values/images",$value->icon);
                $inputs['icon'] = $image;

            }
            $this->valueRepository->update($value->id,$inputs);
            $this->valueRepository->multipleLanguages($value,$request,['title','description']);
            return redirect()->route('values.index')->with(['success' => __('dashboard.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function destroy($id): RedirectResponse
    {

        try {
            $this->valueRepository->delete($id);
            return redirect()->route('values.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }


    }

}
