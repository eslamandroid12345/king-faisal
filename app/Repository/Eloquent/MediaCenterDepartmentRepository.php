<?php

namespace App\Repository\Eloquent;

use App\Models\MediaCenterDepartment;
use App\Repository\MediaCenterDepartmentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class MediaCenterDepartmentRepository extends Repository implements MediaCenterDepartmentRepositoryInterface
{

    protected Model $model;

    public function __construct(MediaCenterDepartment $model)
    {
        parent::__construct($model);
    }

}
