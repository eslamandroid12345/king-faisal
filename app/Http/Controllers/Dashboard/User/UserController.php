<?php

namespace App\Http\Controllers\Dashboard\User;
use App\Http\Controllers\Controller;
use App\Http\Services\Dashboard\Auth\UserService;

class UserController extends Controller
{

    public function __construct(
     private readonly  UserService $userService
    )
    {
    }

    public function index(){

        return $this->userService->users();

    }


    public function destroy($id){

        return $this->userService->destroy($id);

    }

    public function members(){

        return $this->userService->members();

    }


}
