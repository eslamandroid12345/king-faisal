<?php

namespace App\Http\Services\Dashboard\UniversityMessage;

use App\Repository\UniversityMessagesRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class UniversityMessagesService
{

    public function __construct(
        private readonly UniversityMessagesRepositoryInterface $universityMessagesRepository
    )
    {
    }


    public function index(){

        $university_messages = $this->universityMessagesRepository->messages();
        return view('dashboard.university_messages.index',compact('university_messages'));
    }

    public function destroy($id): RedirectResponse
    {
        try {
            $this->universityMessagesRepository->delete($id);
            return redirect()->route('university_messages.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }

}
