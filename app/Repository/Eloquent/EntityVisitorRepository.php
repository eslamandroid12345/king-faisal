<?php

namespace App\Repository\Eloquent;

use App\Models\Contact;
use App\Models\EntityVisitor;
use App\Repository\EntityVisitorRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class EntityVisitorRepository extends Repository implements EntityVisitorRepositoryInterface
{

    protected Model $model;

    public function __construct(EntityVisitor $model)
    {
        parent::__construct($model);
    }


    public function visitors()
    {
        $query = $this->model::query();

        $query->when(request()->has('created_at') && request('created_at') != null, function ($q)  {
            $q->whereDate('created_at', '=',Carbon::parse(request()->input('created_at'))->format('Y-m-d'));
        });

        return $query
            ->with(['entity'])
            ->orderByDesc('id')
            ->paginate(10);

    }
}
