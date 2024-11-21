<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChairmanOfTheBoard extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    public array $translatedAttributes = ['title','description'];

    protected $guarded = [];


    protected $table = 'chairman_of_the_board';

    public function backgroundImage() : Attribute {
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
