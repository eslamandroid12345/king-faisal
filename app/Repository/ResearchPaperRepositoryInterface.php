<?php

namespace App\Repository;

interface ResearchPaperRepositoryInterface extends RepositoryInterface
{

    public function getAllResearchPapers();

    public function getAllByDepartmentId($id);

}
