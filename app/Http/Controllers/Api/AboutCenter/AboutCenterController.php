<?php

namespace App\Http\Controllers\Api\AboutCenter;

use App\Http\Controllers\Controller;
use App\Http\Services\Api\AboutCenter\AboutCenterService;
use Illuminate\Http\JsonResponse;

class AboutCenterController extends Controller
{

    protected AboutCenterService $aboutCenterService;

    public function __construct(AboutCenterService $aboutCenterService)
    {
        $this->aboutCenterService = $aboutCenterService;
    }

    public function aboutUs(): JsonResponse
    {

        return $this->aboutCenterService->aboutUs();
    }


    public function dateOfCenter(): JsonResponse
    {

        return $this->aboutCenterService->dateOfCenter();

    }

    public function chairmanOfTheBoards(){

        return $this->aboutCenterService->chairmanOfTheBoards();

    }


    public function managements(){

        return $this->aboutCenterService->managements();

    }


    public function managerDetail($id){

        return $this->aboutCenterService->managerDetail($id);

    }

}
