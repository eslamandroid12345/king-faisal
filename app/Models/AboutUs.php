<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class AboutUs extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    public array $translatedAttributes = ['header','title','description'];


    protected $table = 'about_us';
    protected $guarded = [];


    public function image() : Attribute {
        return Attribute::get(
            get: function ($value) {
                if ($value !== null) {
                    return url($value);
                }
                return null;
            }
        );
    }


}
