<?php

namespace App\Http\Services\Dashboard\AboutCenter;

use App\Http\Requests\Dashboard\RolesAroundTheWorld\RolesAroundTheWorldSectionsRequest;
use App\Repository\RolesAroundTheWorldRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class RolesAroundTheWorldService
{

    public function __construct(
        private readonly  RolesAroundTheWorldRepositoryInterface $rolesAroundTheWorldRepository
    )
    {
    }


    public function index(){

        $roles_around_the_world_sections = $this->rolesAroundTheWorldRepository->paginate();
        return view('dashboard.about_center.roles_around_the_world.index',compact('roles_around_the_world_sections'));
    }


    public function create(){

        return view('dashboard.about_center.roles_around_the_world.create');
    }

    public function store(RolesAroundTheWorldSectionsRequest $request): RedirectResponse
    {
        try {

            $roles_around_the_world_section = $this->rolesAroundTheWorldRepository->create([]);
            $this->rolesAroundTheWorldRepository->multipleLanguages($roles_around_the_world_section,$request,['title']);

            return redirect()->route('roles_around_the_world_sections.index')->with(['success' => __('dashboard.store')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function edit($id)
    {
        $roles_around_the_world_section = $this->rolesAroundTheWorldRepository->getById($id);

        return view('dashboard.about_center.roles_around_the_world.edit',compact('roles_around_the_world_section'));
    }


    public function update(RolesAroundTheWorldSectionsRequest $request,$id):RedirectResponse
    {

        try {
            $chairman_of_the_board = $this->rolesAroundTheWorldRepository->getById($id);

            $this->rolesAroundTheWorldRepository->update($chairman_of_the_board->id,[]);
            $this->rolesAroundTheWorldRepository->multipleLanguages($chairman_of_the_board,$request,['title']);

            return redirect()->route('roles_around_the_world_sections.index')->with(['success' => __('dashboard.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function destroy($id): RedirectResponse
    {
        try {
            $this->rolesAroundTheWorldRepository->delete($id);
            return redirect()->route('roles_around_the_world_sections.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }

}
