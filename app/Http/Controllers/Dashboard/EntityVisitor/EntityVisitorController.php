<?php

namespace App\Http\Controllers\Dashboard\EntityVisitor;

use App\Http\Controllers\Controller;
use App\Http\Services\Dashboard\EntityVisitor\EntityVisitorService;

class EntityVisitorController extends Controller
{

    public function __construct(
        private readonly EntityVisitorService $entityVisitorService
    )
    {
    }

    public function index()
    {

        return $this->entityVisitorService->index();
    }

    public function destroy($id)
    {

        return $this->entityVisitorService->destroy($id);
    }

}
