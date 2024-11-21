<?php

namespace App\Repository\Eloquent;

use App\Models\RolesAroundTheWorld;
use App\Repository\RolesAroundTheWorldRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class RolesAroundTheWorldRepository extends Repository implements RolesAroundTheWorldRepositoryInterface
{

    protected Model $model;

    public function __construct(RolesAroundTheWorld $model)
    {
        parent::__construct($model);
    }



}
