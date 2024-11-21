<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorStoreAndUpdateRequest;
use App\Http\Services\Dashboard\Author\AuthorService;

class AuthorController extends Controller
{


    protected AuthorService $authorService;

    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function index()
    {
        return $this->authorService->index();
    }


    public function create()
    {
        return $this->authorService->create();

    }


    public function store(AuthorStoreAndUpdateRequest $request)
    {
        return $this->authorService->store($request);

    }



    public function edit($id)
    {
        return $this->authorService->edit($id);

    }


    public function update(AuthorStoreAndUpdateRequest $request, $id)
    {
        return $this->authorService->update($request,$id);

    }


    public function delete($id)
    {
        return $this->authorService->delete($id);

    }

}
