<?php

namespace App\Repository\Eloquent;

use App\Models\MediaCenterDepartment;
use App\Repository\AnnualOfferRepositoryInterface;
use App\Repository\VideoRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class VideoRepository  extends Repository implements VideoRepositoryInterface
{
    protected Model $model;

    public function __construct(MediaCenterDepartment $model)
    {
        parent::__construct($model);
    }


}
