<?php

namespace App\Http\Controllers;
use App\Http\Services\Dashboard\UniversityMessage\UniversityMessagesService;


class UniversityMessageController extends Controller
{
     
    protected UniversityMessagesService $universityMessagesService;

    public function __construct(UniversityMessagesService $universityMessagesService)
    {
        $this->universityMessagesService = $universityMessagesService;
    }


    public function university_messages(){

       return $this->universityMessagesService->university_messages();
    }

}
