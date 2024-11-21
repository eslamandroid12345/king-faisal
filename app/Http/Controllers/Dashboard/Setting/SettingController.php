<?php

namespace App\Http\Controllers\Dashboard\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Setting\SettingUpdateRequest;
use App\Http\Services\Dashboard\Setting\SettingService;

class SettingController extends Controller{


    public function __construct(
      private readonly SettingService $settingService
    )
    {
    }

    public function edit(){

        return $this->settingService->edit();
    }

    public function update(SettingUpdateRequest $request){

        return $this->settingService->update($request);

    }

}
