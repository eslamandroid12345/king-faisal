<?php

namespace App\Repository\Eloquent;

use App\Models\MediaCenterDepartment;
use App\Repository\AnnualOfferRepositoryInterface;
use App\Repository\PreviousEventRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class PreviousEventRepository  extends Repository implements PreviousEventRepositoryInterface
{
    protected Model $model;

    public function __construct(MediaCenterDepartment $model)
    {
        parent::__construct($model);
    }


}
