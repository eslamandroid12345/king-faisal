<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EntityVisitor extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function entity(): BelongsTo
    {

        return $this->belongsTo(Entity::class,'entity_id','id');
    }


}
