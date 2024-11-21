<?php

namespace App\Repository\Eloquent;

use App\Models\Reference;
use App\Repository\ReferenceRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ReferenceRepository extends Repository implements ReferenceRepositoryInterface
{

    protected Model $model;

    public function __construct(Reference $model)
    {
        parent::__construct($model);
    }

}
