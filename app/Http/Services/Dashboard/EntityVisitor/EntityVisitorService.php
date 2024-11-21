<?php

namespace App\Http\Services\Dashboard\EntityVisitor;

use App\Repository\EntityVisitorRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class EntityVisitorService
{

    public function __construct(
        private readonly EntityVisitorRepositoryInterface $entityVisitorRepository
    )
    {
    }

    public function index(){

        $entity_visitors = $this->entityVisitorRepository->visitors();

        return view('dashboard.entities_visitors.index',compact('entity_visitors'));
    }

    public function destroy($id): RedirectResponse
    {
        try {
            $this->entityVisitorRepository->delete($id);
            return redirect()->route('visitors.index')->with(['success' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }

}
