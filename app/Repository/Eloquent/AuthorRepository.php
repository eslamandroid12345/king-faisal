<?php

namespace App\Repository\Eloquent;

use App\Models\Author;
use App\Models\User;
use App\Repository\AuthorRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class AuthorRepository extends Repository implements AuthorRepositoryInterface
{

    protected Model $model;

    public function __construct(Author $model)
    {
        parent::__construct($model);
    }

}
