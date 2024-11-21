<?php

namespace App\Repository\Eloquent;

use App\Models\UniversityMessage;
use App\Repository\UniversityMessagesRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class UniversityMessagesRepository extends Repository implements UniversityMessagesRepositoryInterface
{
    protected Model $model;

    public function __construct(UniversityMessage $model)
    {
        parent::__construct($model);
    }

    public function messages()
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
