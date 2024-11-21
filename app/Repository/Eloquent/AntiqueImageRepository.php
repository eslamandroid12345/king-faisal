<?php

namespace App\Repository\Eloquent;
use App\Models\AntiqueImage;
use App\Repository\AntiqueImageRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class AntiqueImageRepository extends Repository implements AntiqueImageRepositoryInterface
{

    protected Model $model;

    public function __construct(AntiqueImage $model)
    {
        parent::__construct($model);
    }

}
