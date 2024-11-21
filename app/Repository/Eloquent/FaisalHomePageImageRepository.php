<?php

namespace App\Repository\Eloquent;

use App\Models\FaisalHomePage;
use App\Repository\FaisalHomePageImageRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class FaisalHomePageImageRepository extends Repository implements FaisalHomePageImageRepositoryInterface
{

    protected Model $model;

    public function __construct(FaisalHomePage $model)
    {

        parent::__construct($model);

    }

}
