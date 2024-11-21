<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    use HasFactory;

    public function children(): HasMany
    {
        return $this->hasMany(Page::class, 'parent_id', 'id')->with('children');
    }
}
