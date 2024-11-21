<?php

namespace App\Repository\Eloquent;

use App\Models\BookCategory;
use App\Repository\BookCategoryRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BookCategoryRepository extends Repository implements BookCategoryRepositoryInterface
{

    protected Model $model;

    public function __construct(BookCategory $model)
    {
        parent::__construct($model);
    }


}
