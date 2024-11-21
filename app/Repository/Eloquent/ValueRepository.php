<?php

namespace App\Repository\Eloquent;

use App\Models\Aspiration;
use App\Repository\MessageRepositoryInterface;
use App\Repository\ValueRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ValueRepository extends Repository implements ValueRepositoryInterface
{

    protected Model $model;

    public function __construct(Aspiration $model)
    {
        parent::__construct($model);
    }


}

