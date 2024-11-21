<?php

namespace App\Repository\Eloquent;

use App\Models\PointOfSalePhone;
use App\Repository\PointOfSalePhoneRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class PointOfSalePhoneRepository extends Repository implements PointOfSalePhoneRepositoryInterface
{

    protected Model $model;

    public function __construct(PointOfSalePhone $model)
    {
        parent::__construct($model);
    }


}
