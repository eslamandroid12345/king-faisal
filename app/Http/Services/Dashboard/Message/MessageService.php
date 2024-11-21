<?php

namespace App\Http\Services\Dashboard\Message;

use App\Http\Requests\Dashboard\Aspiration\AspirationStoreRequest;
use App\Http\Requests\Dashboard\Aspiration\AspirationUpdateRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Repository\MessageRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class MessageService
{

    public function __construct(
        private readonly MessageRepositoryInterface $messageRepository,
        private readonly FileManagerService $fileManagerService
    )
    {
    }


    public function index(){

        $messages = $this->messageRepository->get('type','message');
        return view('dashboard.messages.index',compact('messages'));
    }


    public function create(){

        return view('dashboard.messages.create');
    }

    public function store(AspirationStoreRequest $request): RedirectResponse
    {

        try {

            $inputs = $request->only('icon','type');

            if($request->hasFile('icon')){

                $image = $this->fileManagerService->handle("icon","messages/images");
                $inputs['icon'] = $image;

            }
            $inputs['type'] = 'message';
            $message = $this->messageRepository->create($inputs);
            $this->messageRepository->multipleLanguages($message,$request,['title','description']);
            return redirect()->route('messages.index')->with(['success' => __('dashboard.store')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function edit($id)
    {
        $message = $this->messageRepository->getById($id);

        return view('dashboard.messages.edit',compact('message'));
    }


    public function update(AspirationUpdateRequest $request,$id): RedirectResponse
    {

        try {

            $message = $this->messageRepository->getById($id);
            $inputs = $request->only('icon','type');

            if($request->hasFile('icon')){

                $image = $this->fileManagerService->handle("icon","messages/images",$message->icon);
                $inputs['icon'] = $image;

            }
            $this->messageRepository->update($message->id,$inputs);
            $this->messageRepository->multipleLanguages($message,$request,['title','description']);
            return redirect()->route('messages.index')->with(['success' => __('dashboard.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function destroy($id): RedirectResponse
    {

        try {
            $this->messageRepository->delete($id);
            return redirect()->route('messages.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


}
