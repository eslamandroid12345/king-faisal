<?php

namespace App\Repository\Eloquent;

use App\Models\AboutChairmanOfTheBoard;
use App\Repository\CenterDateRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class CenterDateRepository extends Repository implements CenterDateRepositoryInterface
{

    protected Model $model;

    public function __construct(AboutChairmanOfTheBoard $model)
    {
        parent::__construct($model);
    }


}
