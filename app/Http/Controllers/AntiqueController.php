<?php


namespace App\Http\Controllers;

use App\Http\Requests\AntiqueStoreRequest;
use App\Http\Requests\AntiqueUpdateRequest;
use App\Http\Services\Dashboard\Antique\AntiqueService;

class AntiqueController extends Controller
{

    protected AntiqueService $antiqueService;

    public function __construct(AntiqueService $antiqueService)
    {

        $this->antiqueService = $antiqueService;
    }

    public function index()
    {

        return $this->antiqueService->index();
    }


    public function create()
    {

        return $this->antiqueService->create();

    }

    public function store(AntiqueStoreRequest $request)
    {

        return $this->antiqueService->store($request);

    }


    public function edit($id)
    {
        return $this->antiqueService->edit($id);

    }


    public function update(AntiqueUpdateRequest $request, $id)
    {
        return $this->antiqueService->update($request, $id);

    }


    public function delete($id)
    {

        return $this->antiqueService->delete($id);

    }


}
