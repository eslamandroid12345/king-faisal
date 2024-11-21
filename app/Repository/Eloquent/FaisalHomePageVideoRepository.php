<?php

namespace App\Repository\Eloquent;

use App\Models\FaisalHomePage;
use App\Repository\FaisalHomePageVideoRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class FaisalHomePageVideoRepository extends Repository implements FaisalHomePageVideoRepositoryInterface
{

    protected Model $model;

    public function __construct(FaisalHomePage $model)
    {

        parent::__construct($model);

    }


}
