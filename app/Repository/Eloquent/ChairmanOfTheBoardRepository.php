<?php

namespace App\Repository\Eloquent;

use App\Models\ChairmanOfTheBoard;
use App\Repository\ChairmanOfTheBoardRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ChairmanOfTheBoardRepository extends Repository implements ChairmanOfTheBoardRepositoryInterface
{

    protected Model $model;

    public function __construct(ChairmanOfTheBoard $model)
    {
        parent::__construct($model);
    }



}
