<?php

namespace App\Models;

use App\Http\Resources\BookStore\BookStoreResource;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BookCategory extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    public array $translatedAttributes = ['name'];


    protected $guarded = [];


    public function bookStores(): HasMany
    {
        return $this->hasMany(BookStoreResource::class,'book_category_id','id');
    }
}
