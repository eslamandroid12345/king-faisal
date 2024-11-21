<?php

namespace App\Http\Services\Dashboard\BookStore;

use App\Http\Requests\BookStoreCreateRequest;
use App\Http\Requests\BookStoreUpdateRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Repository\BookStoreRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class BookStoreService
{

    public function __construct(
       private readonly  BookStoreRepositoryInterface $bookStoreRepository,
       private readonly  FileManagerService $fileManagerService
    )
    {
    }


    public function index(){

        $book_stores = $this->bookStoreRepository->paginate();
        return view('admin.book_stores.index',compact('book_stores'));
    }


    public function create(){

        $authors = $this->bookStoreRepository->getAllAuthors();
        $book_categories = $this->bookStoreRepository->getAllBookCategories();

        return view('admin.book_stores.create',compact('authors','book_categories'));
    }

    public function store(BookStoreCreateRequest $request): RedirectResponse
    {

        $inputs = $request->only('book_type', 'published_year', 'background_image', 'price', 'printing_number', 'show_home_page', 'book_category_id', 'author_id');

        if($request->hasFile('background_image')){

            $image = $this->fileManagerService->handle("background_image","books/images");
            $inputs['background_image'] = $image;

        }
        $book_store = $this->bookStoreRepository->create($inputs);
        $this->bookStoreRepository->multipleLanguages($book_store,$request,['title','description','series','cover','additional_information','contents']);

        toastr()->success(__('dashboard.store'));

        return redirect()->route('books.index');
    }


    public function edit($id)
    {
        $book_store = $this->bookStoreRepository->getById($id);

        $authors = $this->bookStoreRepository->getAllAuthors();
        $book_categories = $this->bookStoreRepository->getAllBookCategories();
        return view('admin.book_stores.edit',compact('book_store','authors','book_categories'));
    }


    public function update(BookStoreUpdateRequest $request,$id): RedirectResponse
    {
        $book_store = $this->bookStoreRepository->getById($id);
        $inputs = $request->only('book_type', 'published_year', 'background_image', 'price', 'printing_number', 'show_home_page', 'book_category_id', 'author_id');

        if($request->hasFile('background_image')){

            $image = $this->fileManagerService->handle("background_image","admins/books",$book_store->getRawOriginal('background_image'));
            $inputs['background_image'] = $image;

        }
        $this->bookStoreRepository->update($book_store->id,$inputs);
        $this->bookStoreRepository->multipleLanguages($book_store,$request,['title','description','series','cover','additional_information','contents']);

        toastr()->success(__('dashboard.update'));

        return redirect()->route('books.index');
    }


    public function delete($id)
    {
        $book_store = $this->bookStoreRepository->getById($id);
        $this->fileManagerService->deleteFile($book_store->getRawOriginal('background_image'));
        $this->bookStoreRepository->delete($book_store->id);
        toastr()->error(__('dashboard.delete'));

        return redirect()->route('books.index');
    }


}
