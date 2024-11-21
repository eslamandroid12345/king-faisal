<?php

namespace App\Repository\Eloquent;
use App\Models\User;
use App\Repository\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends Repository implements UserRepositoryInterface
{

    protected Model $model;

    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function users()
    {
        $query = $this->model::query();

        $query->when(request()->has('phone') && request('phone') != null, function ($q)  {
            $q->where('phone', '=',request()->input('phone'));
        });

        return $query
            ->where('is_member',0)
            ->latest()
            ->paginate(16);

    }

    public function members()
    {
        $query = $this->model::query();

        $query->when(request()->has('phone') && request('phone') != null, function ($q)  {
            $q->where('phone', '=',request()->input('phone'));
        });

        return $query
            ->where('is_member',1)
            ->latest()
            ->paginate(16);
    }
}
