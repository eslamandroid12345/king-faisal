<?php

namespace App\Repository\Eloquent;

use App\Models\Aspiration;
use App\Repository\AspirationRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class AspirationRepository extends Repository implements AspirationRepositoryInterface
{

    protected Model $model;

    public function __construct(Aspiration $model)
    {
        parent::__construct($model);
    }

}
