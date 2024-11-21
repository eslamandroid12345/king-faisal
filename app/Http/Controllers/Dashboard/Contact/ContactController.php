<?php

namespace App\Http\Controllers\Dashboard\Contact;

use App\Http\Controllers\Controller;
use App\Http\Services\Dashboard\Contact\ContactService;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function __construct(
       private readonly ContactService $contactService
    )
    {
    }


    public function index(){

        return $this->contactService->index();
    }


    public function destroy($id){

        return $this->contactService->destroy($id);
    }

}
