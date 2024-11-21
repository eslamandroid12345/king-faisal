<?php

namespace App\Repository\Eloquent;

use App\Models\AboutChairmanOfTheBoard;
use App\Repository\AboutChairmanOfTheBoardRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class AboutChairmanOfTheBoardRepository extends Repository implements AboutChairmanOfTheBoardRepositoryInterface
{

    protected Model $model;

    public function __construct(AboutChairmanOfTheBoard $model)
    {
        parent::__construct($model);
    }

}
