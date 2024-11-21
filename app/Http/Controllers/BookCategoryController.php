<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookCategoryStoreAndUpdateRequest;
use App\Http\Services\Dashboard\BookCategory\BookCategoryService;
use Illuminate\Http\Request;

class BookCategoryController extends Controller
{

    protected BookCategoryService $bookCategoryService;

    public function __construct(BookCategoryService $bookCategoryService)
    {
        $this->bookCategoryService = $bookCategoryService;
    }

    public function index()
    {
        return $this->bookCategoryService->index();
    }


    public function create()
    {
        return $this->bookCategoryService->create();

    }


    public function store(BookCategoryStoreAndUpdateRequest $request)
    {
        return $this->bookCategoryService->store($request);

    }



    public function edit($id)
    {
        return $this->bookCategoryService->edit($id);

    }


    public function update(BookCategoryStoreAndUpdateRequest $request, $id)
    {
        return $this->bookCategoryService->update($request,$id);

    }


    public function delete($id)
    {
        return $this->bookCategoryService->delete($id);

    }

}
