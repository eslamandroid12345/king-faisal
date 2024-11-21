<?php

namespace App\Repository\Eloquent;

use App\Models\MediaCenterDepartment;
use App\Repository\AnnualOfferRepositoryInterface;
use App\Repository\NewRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class NewRepository  extends Repository implements NewRepositoryInterface
{
    protected Model $model;

    public function __construct(MediaCenterDepartment $model)
    {
        parent::__construct($model);
    }


}
