<?php

namespace App\Repository\Eloquent;

use App\Models\City;
use App\Models\PointOfSale;
use App\Models\User;
use App\Repository\PointOfSaleRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class PointOfSaleRepository extends Repository implements PointOfSaleRepositoryInterface
{

    protected Model $model;

    public function __construct(PointOfSale $model)
    {
        parent::__construct($model);
    }


    public function getAllCities(){

        return City::get();
    }


}
