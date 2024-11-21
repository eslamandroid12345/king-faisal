<?php

namespace App\Repository\Eloquent;

use App\Models\Payment;
use App\Models\RequestInformation;
use App\Repository\InformationRequestRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class InformationRequestRepository extends Repository implements InformationRequestRepositoryInterface
{

    protected Model $model;


    public function __construct(RequestInformation $model)
    {
        parent::__construct($model);
    }




}
