<?php

namespace App\Repository\Eloquent;

use App\Models\AboutChairmanOfTheBoard;
use App\Models\Author;
use App\Repository\AwardRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class AwardRepository extends Repository implements AwardRepositoryInterface
{

    protected Model $model;

    public function __construct(AboutChairmanOfTheBoard $model)
    {
        parent::__construct($model);
    }

}
