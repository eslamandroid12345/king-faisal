<?php

namespace App\Http\Services\Dashboard\MediaCenterDepartment;
use App\Http\Requests\Dashboard\Event\EventStoreRequest;
use App\Http\Requests\Dashboard\Event\EventUpdateRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Repository\PreviousEventRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class EventService
{


    public function __construct(
        private readonly PreviousEventRepositoryInterface $previousEventRepository,
    )
    {

    }


    public function index(){

        $previous_events = $this->previousEventRepository->get('type','previous_events');
        return view('dashboard.events.index',compact('previous_events'));
    }

    public function next_events(){

        $next_events = $this->previousEventRepository->get('type','next_events');
        return view('dashboard.events.next_events',compact('next_events'));
    }


    public function create(){

        return view('dashboard.events.create');
    }

    public function store(EventStoreRequest $request): RedirectResponse
    {

        try {

            $inputs = $request->only('type','speakers','location','from_time','to_time');

            $new = $this->previousEventRepository->create($inputs);
            $this->previousEventRepository->multipleLanguages($new,$request,['title','description']);

             if ($inputs['type'] == 'previous_events') {
                 return redirect()->route('events.index')->with(['success' => __('dashboard.store')]);

             }else{
                 return redirect()->route('next_events')->with(['success' => __('dashboard.store')]);

             }

        }catch (\Exception $e){

            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function edit($id)
    {
        $previous_event = $this->previousEventRepository->getById($id);

        return view('dashboard.events.edit',compact('previous_event'));
    }


    public function update(EventUpdateRequest $request,$id): RedirectResponse
    {

        try {

            $previous_event = $this->previousEventRepository->getById($id);
            $inputs = $request->only('speakers','location','from_time','to_time');

            $this->previousEventRepository->update($previous_event->id,$inputs);
            $this->previousEventRepository->multipleLanguages($previous_event,$request,['title','description']);

            if($previous_event->type == 'previous_events') {
                return redirect()->route('events.index')->with(['success' => __('dashboard.update')]);
            }else{
                return redirect()->route('next_events')->with(['success' => __('dashboard.update')]);

            }

        }catch (\Exception $e){

            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function destroy($id): RedirectResponse
    {

        try {
            $this->previousEventRepository->delete($id);
            return redirect()->route('events.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


}
