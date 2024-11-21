<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PointOfSale extends Model  implements TranslatableContract
{
    use HasFactory,Translatable;

    public array $translatedAttributes = ['name','description'];

    protected $guarded = [];


    public function city(): BelongsTo
    {

        return $this->belongsTo(City::class,'city_id','id');
    }


    public function phones(): HasMany
    {

        return $this->hasMany(PointOfSalePhone::class,'point_of_sale_id','id');
    }

}
