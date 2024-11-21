<?php

namespace App\Http\Services\Dashboard\Author;

use App\Http\Requests\AuthorStoreAndUpdateRequest;
use App\Repository\AuthorRepositoryInterface;

class AuthorService
{

    public function __construct(
        private readonly  AuthorRepositoryInterface $authorRepository
    )
    {
    }


    public function index(){

        $authors = $this->authorRepository->paginate();
        return view('admin.authors.index',compact('authors'));
    }


    public function create(){

        return view('admin.authors.create');
    }

    public function store(AuthorStoreAndUpdateRequest $request)
    {
        $inputs = $request->except(['about_author_ar','about_author_en','about_author_ch']);

        $author = $this->authorRepository->create($inputs);
        $this->authorRepository->multipleLanguages($author,$request,['about_author']);

        toastr()->success(__('dashboard.store'));

        return redirect()->route('authors.index');
    }


    public function edit($id)
    {
        $author = $this->authorRepository->getById($id);

        return view('admin.authors.edit',compact('author'));
    }


    public function update(AuthorStoreAndUpdateRequest $request,$id)
    {
        $author = $this->authorRepository->getById($id);

        $inputs = $request->except(['about_author_ar','about_author_en','about_author_ch']);
        $this->authorRepository->update($author->id,$inputs);
        $this->authorRepository->multipleLanguages($author,$request,['about_author']);

        toastr()->success(__('dashboard.update'));

        return redirect()->route('authors.index');
    }


    public function delete($id)
    {
        $author = $this->authorRepository->getById($id);
        $this->authorRepository->delete($author->id);
        toastr()->error(__('dashboard.delete'));

        return redirect()->route('authors.index');
    }

}
