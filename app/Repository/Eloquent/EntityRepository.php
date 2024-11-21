<?php

namespace App\Repository\Eloquent;

use App\Models\Entity;
use App\Repository\EntityRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class EntityRepository extends Repository implements EntityRepositoryInterface
{

    protected Model $model;

    public function __construct(Entity $model)
    {
        parent::__construct($model);
    }

}
