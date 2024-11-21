<?php

namespace App\Http\Controllers\Api\Setting;

use App\Http\Controllers\Controller;
use App\Http\Services\Api\Setting\SettingService;
use Illuminate\Http\JsonResponse;

class SettingController extends Controller
{

    protected SettingService $settingService;

    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
    }


    public function setting(): JsonResponse
    {
        return $this->settingService->setting();
    }
}
