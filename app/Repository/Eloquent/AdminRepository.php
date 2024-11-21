<?php

namespace App\Repository\Eloquent;

use App\Models\Admin;
use App\Repository\AdminRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminRepository extends Repository implements AdminRepositoryInterface
{
    protected Model $model;

    public function __construct(Admin $model)
    {
        parent::__construct($model);
    }

    public function getCount(): int
    {
        return $this->model::query()->count();
    }


    public function getAdminList()
    {

        $query = $this->model::query();

        $query->when(request()->has('email') && request('email') != null, function ($q)  {
            $q->where('email', '=',request()->input('email'));
        });

        return $query
            ->orderByDesc('id')
            ->paginate(10);


    }
}
