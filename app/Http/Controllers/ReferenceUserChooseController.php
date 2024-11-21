<?php

namespace App\Http\Controllers;

use App\Http\Services\Dashboard\ReferenceUserChoose\ReferenceUserChooseService;
use Illuminate\Http\Request;

class ReferenceUserChooseController extends Controller
{

    protected ReferenceUserChooseService $referenceUserChooseService;

    public function __construct(ReferenceUserChooseService $referenceUserChooseService)
    {

        $this->referenceUserChooseService = $referenceUserChooseService;
    }

    public function index($id){

        return $this->referenceUserChooseService->index($id);

    }

}
