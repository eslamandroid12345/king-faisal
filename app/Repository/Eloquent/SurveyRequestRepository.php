<?php

namespace App\Repository\Eloquent;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Reference;
use App\Models\ReferenceUserChoose;
use App\Models\RequestInformation;
use App\Models\SurveyRequest;
use App\Repository\SurveyRequestRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SurveyRequestRepository extends Repository implements SurveyRequestRepositoryInterface
{

    protected Model $model;

    public function __construct(SurveyRequest $model)
    {
        parent::__construct($model);
    }



    public function referenceUserChoose($surveyRequestId){

        return ReferenceUserChoose::query()
            ->whereRelation('reference','survey_request_id',$surveyRequestId)
            ->where('user_id','=',auth('user-api')->id())
            ->count();
    }


    public function referencesCount($id){

            return Reference::query()
            ->where('survey_request_id','=',$id)
            ->count();
    }

    public function getAllReferencesChoose()
    {

        $surveyRequest = $this->model::query()->where('user_id',auth('user-api')->id())->latest()->first();

        if(!is_null($surveyRequest) && $surveyRequest->references()->count() > 0) {

           return ReferenceUserChoose::query()
               ->with(['reference'])
                ->whereRelation('reference','survey_request_id',$surveyRequest->id)
               ->get();
        }

    }

}
