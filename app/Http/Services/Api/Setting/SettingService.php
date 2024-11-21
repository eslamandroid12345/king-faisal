<?php

namespace App\Http\Services\Api\Setting;

use App\Http\Resources\Setting\SettingResource;
use App\Http\Services\Mutual\GetService;
use App\Http\Traits\Response;
use App\Repository\SettingRepositoryInterface;
use Illuminate\Http\JsonResponse;

abstract class SettingService
{

    use Response;

    public function __construct(
       private readonly SettingRepositoryInterface $settingRepository,
       private readonly GetService $getService
    )
    {
    }

    public function setting(): JsonResponse
    {

        return $this->getService->handle(resource: SettingResource::class,repository: $this->settingRepository,method: 'getFirst',is_instance: true,message:  __('user.show_success'));
    }

}
