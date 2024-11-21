<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaisalHomeRequest;
use App\Http\Services\Dashboard\FaisalHome\FaisalHomeService;

class FaisalHomeController extends Controller
{


    protected FaisalHomeService $faisalHomeService;

    public function __construct( FaisalHomeService $faisalHomeService)
    {

        $this->faisalHomeService = $faisalHomeService;
    }

    public function edit()
    {

        return $this->faisalHomeService->edit();

    }


    public function update($id,FaisalHomeRequest $request)
    {

        return $this->faisalHomeService->update($id,$request);

    }

}
