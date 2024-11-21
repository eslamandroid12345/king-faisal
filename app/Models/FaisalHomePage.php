<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaisalHomePage extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    public array $translatedAttributes = ['title','description'];


    protected $guarded = [];
}
