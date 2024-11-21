<?php

namespace App\Http\Controllers\Dashboard\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Auth\AdminLoginRequest;
use App\Http\Requests\Dashboard\Admin\AdminStoreRequest;
use App\Http\Requests\Dashboard\Admin\AdminUpdateRequest;

use App\Http\Services\Dashboard\Auth\AdminService;
use Illuminate\Http\RedirectResponse;


class AdminController extends Controller{


   public function __construct(
       private readonly AdminService $adminService
   )
   {
   }

    public function login(){

        return $this->adminService->login();
    }

    public function loginProcess(AdminLoginRequest $request): RedirectResponse
    {
        return $this->adminService->loginProcess($request);

    }

    public function home(){

        return $this->adminService->home();
    }

    public function index(){

        return $this->adminService->index();

    }


    public function create(){

        return $this->adminService->create();

    }

    public function store(AdminStoreRequest $request): RedirectResponse
    {

        return $this->adminService->store($request);

    }


    public function edit($id)
    {
        return $this->adminService->edit($id);

    }

    public function update($id,AdminUpdateRequest $request): RedirectResponse
    {
        return $this->adminService->update($id,$request);

    }


    public function destroy($id): RedirectResponse
    {
        return $this->adminService->destroy($id);

    }

    public function logout(): RedirectResponse
    {
        return $this->adminService->logout();

    }


}
