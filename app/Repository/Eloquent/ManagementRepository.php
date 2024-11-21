<?php

namespace App\Repository\Eloquent;

use App\Models\Management;
use App\Repository\ManagementRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ManagementRepository extends Repository implements ManagementRepositoryInterface
{

    protected Model $model;

    public function __construct(Management $model)
    {
        parent::__construct($model);
    }



}
