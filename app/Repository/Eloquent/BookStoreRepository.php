<?php

namespace App\Repository\Eloquent;

use App\Models\Author;
use App\Models\BookCategory;
use App\Models\BookStore;
use App\Models\User;
use App\Repository\BookStoreRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;

class BookStoreRepository extends Repository implements BookStoreRepositoryInterface
{
    protected Model $model;

    public function __construct(BookStore $model)
    {
        parent::__construct($model);
    }


    public function getAllBookCategories(){

        return BookCategory::get();
    }
    public function getAllAuthors(){

        return Author::get();

    }

    public function getAllBooks(): LengthAwarePaginator
    {

        $query = $this->model::query();

        $query->when(request()->has('category_id') && request('category_id') != null, function ($q)  {
            $q->where('book_category_id', '=',request()->input('category_id'));
        });

        $query->when(request()->has('title') && request('title') != null, function ($q)  {
            $q->whereTranslationLike('title', '%' . request('title') . '%');
        });

        return $query
            ->latest()
            ->paginate(16);

    }


}
