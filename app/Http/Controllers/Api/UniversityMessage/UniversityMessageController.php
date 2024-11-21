<?php

namespace App\Http\Controllers\Api\UniversityMessage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Message\UniversityMessageRequest;
use App\Http\Services\Api\UniversityMessage\UniversityMessageService;
use Illuminate\Http\JsonResponse;

class UniversityMessageController extends Controller
{

    protected UniversityMessageService $universityMessageService;

    public function __construct(UniversityMessageService $universityMessageService)
    {
        $this->universityMessageService = $universityMessageService;
    }


    public function store(UniversityMessageRequest $request): JsonResponse
    {
        return $this->universityMessageService->store($request);
    }
}
