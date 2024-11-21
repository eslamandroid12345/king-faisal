<?php

namespace App\Http\Controllers\Api\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Contact\ContactRequest;
use App\Http\Requests\Api\Contact\StoreVisitorRequest;
use App\Http\Services\Api\Contact\ContactService;
use Illuminate\Http\JsonResponse;

class ContactController extends Controller
{

    protected ContactService $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function contactUs(ContactRequest $request): JsonResponse
    {

        return $this->contactService->contactUs($request);
    }

    public function getAllEntities()
    {
        return $this->contactService->getAllEntities();

    }


    public function storeVisitorRequest(StoreVisitorRequest $request)
    {
        return $this->contactService->storeVisitorRequest($request);
    }

}
