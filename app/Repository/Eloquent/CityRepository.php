<?php

namespace App\Repository\Eloquent;

use App\Models\City;
use App\Repository\CityRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class CityRepository extends Repository implements CityRepositoryInterface
{

    protected Model $model;

    public function __construct(City $model)
    {
        parent::__construct($model);
    }


}
