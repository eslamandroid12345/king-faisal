<?php

namespace App\Http\Services\Dashboard\Auth;

use App\Repository\UserRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class UserService{


    public function __construct(
        private readonly  UserRepositoryInterface $userRepository
    )
    {
    }

    public function members(){

        $members = $this->userRepository->members();

        return view('dashboard.users.members',compact('members'));
    }


    public function users(){

        $users = $this->userRepository->users();

        return view('dashboard.users.index',compact('users'));
    }


    public function destroy($id): RedirectResponse
    {
        try {
            $this->userRepository->delete($id);

            return redirect()->back()->with(['success' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }

}
