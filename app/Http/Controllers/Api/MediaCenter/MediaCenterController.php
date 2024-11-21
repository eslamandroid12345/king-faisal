<?php

namespace App\Http\Controllers\Api\MediaCenter;

use App\Http\Controllers\Controller;
use App\Http\Services\Api\MediaCenter\MediaCenterService;

class MediaCenterController extends Controller
{

    protected MediaCenterService $mediaCenterService;

    public function __construct(MediaCenterService $mediaCenterService)
    {
        $this->mediaCenterService = $mediaCenterService;
    }

    public function news()
    {
        return  $this->mediaCenterService->news();
    }


    public function previousEvents()
    {
        return  $this->mediaCenterService->previousEvents();

    }


    public function video()
    {
        return  $this->mediaCenterService->video();

    }


    public function annualOffer()
    {
        return  $this->mediaCenterService->annualOffer();

    }

    public function newShow($id)
    {
        return  $this->mediaCenterService->newShow($id);

    }

}
