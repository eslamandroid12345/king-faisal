<?php

namespace App\Repository\Eloquent;
use App\Models\Antique;
use App\Repository\AntiqueRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class AntiqueRepository extends Repository implements AntiqueRepositoryInterface
{

    protected Model $model;

    public function __construct(Antique $model)
    {
        parent::__construct($model);
    }



}
