<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;


class Bank extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    public array $translatedAttributes = ['name','account_name'];

    protected $guarded = [];
}
