<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SurveyRequest extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function user(): BelongsTo
    {

        return $this->belongsTo(User::class,'user_id','id');
    }

    public function references_user(): HasManyThrough
    {

        return $this->hasManyThrough(ReferenceUserChoose::class,Reference::class,'survey_request_id','reference_id','id','id');
    }


    public function references(): HasMany
    {

        return $this->hasMany(Reference::class,'survey_request_id','id');
    }


    public function payment(): HasOne
    {

        return $this->hasOne(Payment::class,'survey_request_id','id');
    }

}
