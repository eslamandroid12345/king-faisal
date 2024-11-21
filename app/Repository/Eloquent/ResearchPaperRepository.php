<?php

namespace App\Repository\Eloquent;

use App\Models\ResearchPaper;
use App\Models\ResearchPaperDepartment;
use App\Repository\ResearchPaperRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;

class ResearchPaperRepository extends Repository implements ResearchPaperRepositoryInterface
{

    protected Model $model;

    public function __construct(ResearchPaper $model)
    {
        parent::__construct($model);
    }

    public function getAllResearchPapers()
    {

        $query = $this->model::query();

        $query->when(request()->has('research_department_id') && request('research_department_id') != null, function ($q)  {
            $q->where('research_department_id','=',request()->input('research_department_id'));
        });

        return $query
            ->latest()
            ->paginate(10);
    }

    public function getAllByDepartmentId($id): LengthAwarePaginator
    {

        $query = $this->model::query();

        $query->when(request()->has('title') && request('title') != null, function ($q)  {
            $q->whereTranslationLike('title', '%' . request('title') . '%');
        });

        return $query
            ->where('research_department_id',$id)
            ->latest()
            ->paginate(16);

    }


}
