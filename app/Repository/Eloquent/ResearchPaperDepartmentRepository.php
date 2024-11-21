<?php

namespace App\Repository\Eloquent;

use App\Models\ResearchPaperDepartment;
use App\Repository\ResearchPaperDepartmentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ResearchPaperDepartmentRepository extends Repository implements ResearchPaperDepartmentRepositoryInterface
{

    protected Model $model;

    public function __construct(ResearchPaperDepartment $model)
    {
        parent::__construct($model);
    }


}
