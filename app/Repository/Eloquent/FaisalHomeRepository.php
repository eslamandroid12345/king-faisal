<?php

namespace App\Repository\Eloquent;

use App\Models\FaisalHome;
use App\Repository\FaisalHomeRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class FaisalHomeRepository extends Repository implements FaisalHomeRepositoryInterface
{

    protected Model $model;

    public function __construct(FaisalHome $model)
    {

        parent::__construct($model);

    }

}
