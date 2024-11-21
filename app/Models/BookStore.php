<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookStore extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    public array $translatedAttributes = ['title', 'description','series','cover','additional_information','contents'];

    protected $guarded = [];


    public function bookCategory(): BelongsTo
    {

        return $this->belongsTo(BookCategory::class,'book_category_id','id');
    }


    public function author(): BelongsTo
    {

        return $this->belongsTo(Author::class,'author_id','id');
    }

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

