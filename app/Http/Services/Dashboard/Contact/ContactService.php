<?php

namespace App\Http\Services\Dashboard\Contact;

use App\Repository\ContactRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class ContactService
{
    public function __construct(
        private readonly ContactRepositoryInterface $contactRepository
    )
    {
    }


    public function index(){

        $contacts = $this->contactRepository->contacts();

        return view('dashboard.contact.index',compact('contacts'));
    }

    public function destroy($id): RedirectResponse
    {
        try {
            $this->contactRepository->delete($id);
            return redirect()->route('contacts.index')->with(['success' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }

}
