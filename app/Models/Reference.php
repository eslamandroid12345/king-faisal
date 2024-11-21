<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reference extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function survey_request(): BelongsTo
    {

        return $this->belongsTo(SurveyRequest::class,'survey_request_id','id');
    }

}
