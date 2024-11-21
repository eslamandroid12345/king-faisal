<?php

namespace App\Repository\Eloquent;

use App\Models\AboutUs;
use App\Repository\AboutUsInformationRepositoryInterface;
use Illuminate\Database\Eloquent\Model;


class AboutUsInformationRepository extends Repository implements AboutUsInformationRepositoryInterface
{

    protected Model $model;

    public function __construct(AboutUs $model)
    {
        parent::__construct($model);
    }

}
