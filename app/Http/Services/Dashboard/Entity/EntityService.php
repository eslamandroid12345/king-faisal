<?php

namespace App\Http\Services\Dashboard\Entity;
use App\Http\Requests\Dashboard\Entity\EntityRequest;
use App\Repository\EntityRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class EntityService
{
    public function __construct(
        private readonly  EntityRepositoryInterface $entityRepository
    )
    {
    }

    public function index(){

        $entities = $this->entityRepository->paginate();
        return view('dashboard.entities_visitors.entities.index',compact('entities'));
    }


    public function create(){

        return view('dashboard.entities_visitors.entities.create');
    }

    public function store(EntityRequest $request)
    {

        try {
            $entity = $this->entityRepository->create([]);
            $this->entityRepository->multipleLanguages($entity,$request,['name']);
            return redirect()->route('entities.index')->with(['success' => __('dashboard.store')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function edit($id)
    {
        $entity = $this->entityRepository->getById($id);

        return view('dashboard.entities_visitors.entities.edit',compact('entity'));
    }


    public function update(EntityRequest $request, $id): RedirectResponse
    {

        try {
            $entity = $this->entityRepository->getById($id);

            $this->entityRepository->update($entity->id,[]);
            $this->entityRepository->multipleLanguages($entity,$request,['name']);
            return redirect()->route('entities.index')->with(['success' => __('dashboard.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function delete($id): RedirectResponse
    {

        try {
            $this->entityRepository->delete($id);
            return redirect()->route('entities.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }

}
