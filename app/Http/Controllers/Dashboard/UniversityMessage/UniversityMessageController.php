<?php

namespace App\Http\Controllers\Dashboard\UniversityMessage;
use App\Http\Controllers\Controller;
use App\Http\Services\Dashboard\UniversityMessage\UniversityMessagesService;


class UniversityMessageController extends Controller
{

    public function __construct(
       private readonly UniversityMessagesService $universityMessagesService
    )
    {
    }


    public function index(){

       return $this->universityMessagesService->index();
    }

    public function destroy($id){

        return $this->universityMessagesService->destroy($id);
    }

}
