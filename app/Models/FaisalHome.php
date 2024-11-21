<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaisalHome extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    protected $table = 'faisal_home';

    public array $translatedAttributes = ['content'];

    protected $guarded = [];
}

