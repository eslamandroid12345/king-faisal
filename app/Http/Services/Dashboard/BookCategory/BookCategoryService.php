<?php

namespace App\Http\Services\Dashboard\BookCategory;
use App\Http\Requests\BookCategoryStoreAndUpdateRequest;
use App\Repository\BookCategoryRepositoryInterface;

class BookCategoryService{


    public function __construct(
        private readonly  BookCategoryRepositoryInterface $bookCategoryRepository
    )
    {
    }


    public function index(){

        $book_categories = $this->bookCategoryRepository->paginate();
        return view('admin.book_category.index',compact('book_categories'));
    }


    public function create(){

        return view('admin.book_category.create');
    }

    public function store(BookCategoryStoreAndUpdateRequest $request)
    {

        $bookCategory = $this->bookCategoryRepository->create([]);
        $this->bookCategoryRepository->multipleLanguages($bookCategory,$request,['name']);

        toastr()->success(__('dashboard.store'));

        return redirect()->route('bookCategories.index');
    }


    public function edit($id)
    {
        $book_category = $this->bookCategoryRepository->getById($id);

        return view('admin.book_category.edit',compact('book_category'));
    }


    public function update(BookCategoryStoreAndUpdateRequest $request,$id)
    {
        $book_category = $this->bookCategoryRepository->getById($id);

        $this->bookCategoryRepository->update($book_category->id,[]);
        $this->bookCategoryRepository->multipleLanguages($book_category,$request,['name']);

        toastr()->success(__('dashboard.update'));

        return redirect()->route('bookCategories.index');
    }


    public function delete($id)
    {
        $book_category = $this->bookCategoryRepository->getById($id);
        $this->bookCategoryRepository->delete($book_category->id);
        toastr()->error(__('dashboard.delete'));

        return redirect()->route('bookCategories.index');
    }


}
