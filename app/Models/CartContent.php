<?php

namespace App\Models;

use App\Http\Resources\Cart\AntiqueResource;
use App\Http\Resources\Cart\BookStoreResource;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartContent extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class,'cart_id','id');
    }

    public function bookStore(): BelongsTo
    {
        return $this->belongsTo(BookStore::class,'book_store_id','id');
    }

    public function antique(): BelongsTo
    {
        return $this->belongsTo(Antique::class,'antique_id','id');
    }



    public function items() : Attribute {
        return Attribute::get(
            get: function () {
                return $this->book_store_id ? new BookStoreResource($this->bookStore) : new AntiqueResource($this->antique);
            }
        );
    }


    public function amount() : Attribute {
        return Attribute::get(function () {
            return ($this->book_store_id ? $this->bookStore?->price :  $this->antique?->price);
        });
    }
}
