<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model  implements TranslatableContract
{
    use HasFactory,Translatable;

    public array $translatedAttributes = ['name'];


    protected $guarded = [];


    public function pointOfSales(): HasMany
    {
        return $this->hasMany(PointOfSale::class,'city_id','id');
    }
}
