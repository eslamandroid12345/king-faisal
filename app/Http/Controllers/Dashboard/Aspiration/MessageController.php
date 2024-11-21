<?php

namespace App\Http\Controllers\Dashboard\Aspiration;

use App\Http\Controllers\Controller;
use App\Http\Services\Dashboard\Message\MessageService;
use App\Http\Requests\Dashboard\Aspiration\AspirationStoreRequest;
use App\Http\Requests\Dashboard\Aspiration\AspirationUpdateRequest;

class MessageController extends Controller
{

    public function __construct(
       private readonly MessageService $messageService
    )
    {
    }


    public function index(){

        return $this->messageService->index();

    }


    public function create(){

        return $this->messageService->create();

    }

    public function store(AspirationStoreRequest $request)
    {

        return $this->messageService->store($request);

    }


    public function edit($id)
    {

        return $this->messageService->edit($id);

    }


    public function update(AspirationUpdateRequest $request,$id)
    {
        return $this->messageService->update($request,$id);

    }


    public function destroy($id)
    {
        return $this->messageService->destroy($id);

    }

}
