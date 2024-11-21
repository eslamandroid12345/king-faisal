<?php

namespace App\Repository\Eloquent;

use App\Models\MediaCenterDepartment;
use App\Repository\AnnualOfferRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class AnnualOfferRepository extends Repository implements AnnualOfferRepositoryInterface
{
    protected Model $model;

    public function __construct(MediaCenterDepartment $model)
    {
        parent::__construct($model);
    }



}
