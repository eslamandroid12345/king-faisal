<?php

namespace App\Repository;

interface SurveyRequestRepositoryInterface extends RepositoryInterface
{


    public function referencesCount($id);
    public function referenceUserChoose($surveyRequestId);
    public function getAllReferencesChoose();





    }
