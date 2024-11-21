<?php

namespace App\Repository\Eloquent;

use App\Models\ChairmanOfTheBoardNew;
use App\Repository\ChairmanOfTheBoardNewRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ChairmanOfTheBoardNewRepository extends Repository implements ChairmanOfTheBoardNewRepositoryInterface
{

    protected Model $model;

    public function __construct(ChairmanOfTheBoardNew $model)
    {
        parent::__construct($model);
    }



}
