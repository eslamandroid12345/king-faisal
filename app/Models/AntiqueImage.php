<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntiqueImage extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function image() : Attribute {
        return Attribute::get(
            get: function ($value) {
                return url($value);
            }
        );
    }
}
