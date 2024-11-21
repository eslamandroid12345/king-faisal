<?php

namespace App\Http\Services\Dashboard\ReferenceUserChoose;

use App\Repository\Eloquent\ReferenceUserChooseRepository;

class ReferenceUserChooseService
{


    public function __construct(
        private readonly ReferenceUserChooseRepository $referenceUserChooseRepository
    )
    {
    }

    public function index($id){

        $reference_user_chooses = $this->referenceUserChooseRepository->references_chooses($id);

        return view('admin.survey_requests.reference_users.all',compact('reference_user_chooses'));

    }

}
