<?php

namespace App\Repository\Eloquent;

use App\Models\FaisalHomePage;
use App\Repository\FaisalHomePageSoundRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class FaisalHomePageSoundRepository extends Repository implements FaisalHomePageSoundRepositoryInterface
{

    protected Model $model;

    public function __construct(FaisalHomePage $model)
    {

        parent::__construct($model);

    }

}
