<?php

namespace App\Repository\Eloquent;

use App\Models\Aspiration;
use App\Repository\VisionRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class VisionRepository extends Repository implements VisionRepositoryInterface
{


    protected Model $model;

    public function __construct(Aspiration $model)
    {
        parent::__construct($model);
    }


}
