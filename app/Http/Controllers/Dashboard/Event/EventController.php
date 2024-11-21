<?php
namespace App\Http\Controllers\Dashboard\Event;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Event\EventStoreRequest;
use App\Http\Requests\Dashboard\Event\EventUpdateRequest;
use App\Http\Services\Dashboard\MediaCenterDepartment\EventService;

class EventController extends Controller
{

    public function __construct(
       private readonly EventService $previousEventService
    )
    {
    }


    public function index(){

        return  $this->previousEventService->index();

    }


    public function next_events(){

        return  $this->previousEventService->next_events();

    }


    public function create(){

        return  $this->previousEventService->create();

    }

    public function store(EventStoreRequest $request)
    {

        return  $this->previousEventService->store($request);

    }


    public function edit($id)
    {

        return  $this->previousEventService->edit($id);

    }


    public function update(EventUpdateRequest $request,$id)
    {
        return  $this->previousEventService->update($request,$id);

    }


    public function destroy($id)
    {
        return  $this->previousEventService->destroy($id);

    }

}
