<?php

namespace App\Repository\Eloquent;

use App\Models\MessageDeposit;
use App\Repository\MessageDepositRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class MessageDepositRepository extends Repository implements MessageDepositRepositoryInterface
{
    protected Model $model;

    public function __construct(MessageDeposit $model)
    {
        parent::__construct($model);
    }


    public function message_deposits()
    {
        $query = $this->model::query();

        $query->when(request()->has('created_at') && request('created_at') != null, function ($q)  {
            $q->whereDate('created_at', '=',Carbon::parse(request()->input('created_at'))->format('Y-m-d'));
        });

        return $query
            ->with(['user'])
            ->orderByDesc('id')
            ->paginate(10);
    }
}
