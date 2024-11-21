<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Antique extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    public array $translatedAttributes = ['name','period','material','origin','description','category'];

    protected $guarded = [];


    public function images(): HasMany
    {
        return $this->hasMany(AntiqueImage::class,'antique_id','id');
    }


    public function antiqueImages() : Attribute {
        return Attribute::get(
            get: function () {
                $images = [];
                foreach ($this->images()->select('image')->get() as $image){
                    $images[] = $image->image;
                }
                return $images;
            }
        );
    }


    public function oneImage(): HasOne
    {
        return $this->hasOne(AntiqueImage::class,'antique_id','id');
    }


}
