<?php

namespace App\Http\Controllers\Api\Antique;

use App\Http\Controllers\Controller;
use App\Http\Services\Api\Antique\AntiqueService;
use Illuminate\Http\JsonResponse;

class AntiqueController extends Controller
{

    protected AntiqueService $antiqueService;

    public function __construct(AntiqueService $antiqueService)
    {
        $this->antiqueService = $antiqueService;
    }


    public function getAllAntiques(): JsonResponse
    {

        return $this->antiqueService->getAllAntiques();
    }


    public function showOneAntique($id): JsonResponse
    {

        return $this->antiqueService->showOneAntique($id);
    }
}
