<?php

namespace App\Repository\Eloquent;

use App\Models\ReferenceUserChoose;
use App\Models\SurveyRequest;
use App\Repository\ReferenceUserChooseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ReferenceUserChooseRepository extends Repository implements ReferenceUserChooseRepositoryInterface
{

    protected Model $model;

    public function __construct(ReferenceUserChoose $model)
    {
        parent::__construct($model);
    }

    public function references_chooses($id){

          return SurveyRequest::query()
            ->findOrFail($id)
            ->references_user()
              ->paginate(10);

    }

}
