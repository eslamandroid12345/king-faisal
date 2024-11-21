<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreCreateRequest;
use App\Http\Requests\BookStoreUpdateRequest;
use App\Http\Services\Dashboard\BookStore\BookStoreService;

class BookStoreController extends Controller
{

    protected BookStoreService $bookStoreService;

    public function __construct(BookStoreService $bookStoreService)
    {

        $this->bookStoreService = $bookStoreService;
    }

    public function index(){

        return $this->bookStoreService->index();
    }


    public function create(){

        return $this->bookStoreService->create();

    }

    public function store(BookStoreCreateRequest $request)
    {

        return $this->bookStoreService->store($request);

    }


    public function edit($id)
    {
        return $this->bookStoreService->edit($id);

    }


    public function update(BookStoreUpdateRequest $request,$id)
    {
        return $this->bookStoreService->update($request,$id);

    }


    public function delete($id)
    {

        return $this->bookStoreService->delete($id);

    }


}
