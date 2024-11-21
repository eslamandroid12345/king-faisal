<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReferenceUserChoose extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function reference(): BelongsTo
    {

        return $this->belongsTo(Reference::class,'reference_id','id');
    }


    public function user(): BelongsTo
    {

        return $this->belongsTo(User::class,'user_id','id');
    }

}
