<?php

namespace App\Repository\Eloquent;

use App\Models\Contact;
use App\Repository\ContactRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ContactRepository extends Repository implements ContactRepositoryInterface
{

    protected Model $model;

    public function __construct(Contact $model)
    {
        parent::__construct($model);
    }


    public function contacts()
    {
        $query = $this->model::query();

        $query->when(request()->has('created_at') && request('created_at') != null, function ($q)  {
            $q->whereDate('created_at', '=',Carbon::parse(request()->input('created_at'))->format('Y-m-d'));
        });

        return $query
            ->orderByDesc('id')
            ->paginate(10);

    }
}
