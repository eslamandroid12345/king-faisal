<?php

namespace App\Http\Services\Dashboard\Setting;

use App\Http\Requests\Dashboard\Setting\SettingUpdateRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Repository\SettingRepositoryInterface;

class SettingService
{
    public function __construct(
        private readonly SettingRepositoryInterface $settingRepository,
        private readonly FileManagerService $fileManagerService
    )
    {
    }

    public function edit(){

        return view('dashboard.setting.edit');

    }


    public function update(SettingUpdateRequest $request){

        $setting = $this->settingRepository->getFirst();

        $inputs = $request->validated();

        if($request->hasFile('logo')){

            $image = $this->fileManagerService->handle("logo","setting/images",$setting->logo);
            $inputs['logo'] = $image;

        }

        if($request->hasFile('king_faisal_and_family_image')){

            $king_faisal_and_family_image = $this->fileManagerService->handle("logo","setting/images",$setting->king_faisal_and_family_image);
            $inputs['king_faisal_and_family_image'] = $king_faisal_and_family_image;
        }

        $this->settingRepository->update($setting->id,$inputs);
        return redirect()->route('admin.home')->with(['success' => __('dashboard.update')]);

    }
}
