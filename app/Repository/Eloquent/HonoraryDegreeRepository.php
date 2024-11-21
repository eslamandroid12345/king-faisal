<?php

namespace App\Repository\Eloquent;

use App\Models\AboutChairmanOfTheBoard;
use App\Repository\CenterDateRepositoryInterface;
use App\Repository\HonoraryDegreeRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class HonoraryDegreeRepository extends Repository implements HonoraryDegreeRepositoryInterface
{

    protected Model $model;

    public function __construct(AboutChairmanOfTheBoard $model)
    {
        parent::__construct($model);
    }



}
