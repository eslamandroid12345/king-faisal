<?php

namespace App\Repository\Eloquent;

use App\Models\Aspiration;
use App\Repository\MessageRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class MessageRepository extends Repository implements MessageRepositoryInterface
{

    protected Model $model;

    public function __construct(Aspiration $model)
    {
        parent::__construct($model);
    }


}
