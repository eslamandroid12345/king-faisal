<?php

namespace App\Repository\Eloquent;

use App\Models\EntityVisitor;
use App\Models\FaisalHomePage;
use App\Repository\FaisalHomePageDocumentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class FaisalHomePageDocumentRepository extends Repository implements FaisalHomePageDocumentRepositoryInterface
{

    protected Model $model;

    public function __construct(FaisalHomePage $model)
    {

    parent::__construct($model);

    }


}
