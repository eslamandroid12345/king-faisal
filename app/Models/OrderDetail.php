<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function book_store(): BelongsTo
    {

        return $this->belongsTo(BookStore::class,'book_store_id','id');

    }


    public function antique(): BelongsTo
    {

        return $this->belongsTo(Antique::class,'antique_id','id');

    }

}
