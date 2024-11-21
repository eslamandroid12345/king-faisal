<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolesAroundTheWorld extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    public array $translatedAttributes = ['title'];

    protected $guarded = [];


    protected $table = 'roles_around_the_world';
}
