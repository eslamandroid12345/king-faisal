<?php

namespace App\Repository\Eloquent;

use App\Models\MemberShipRequest;
use App\Repository\MemberShipRequestRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class MemberShipRequestRepository extends Repository implements MemberShipRequestRepositoryInterface
{

    protected Model $model;


    public function __construct(MemberShipRequest $model)
    {
        parent::__construct($model);
    }


}
