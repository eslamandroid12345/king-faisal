<?php

namespace App\Http\Controllers;

use App\Http\Services\Dashboard\EntityVisitor\EntityVisitorService;

class EntityVisitorController extends Controller
{


    protected EntityVisitorService $entityVisitorService;

    public function __construct(EntityVisitorService $entityVisitorService)
    {
        $this->entityVisitorService = $entityVisitorService;
    }

    public function getAllEntityVisitors()
    {

        return $this->entityVisitorService->getAllEntityVisitors();
    }

}
