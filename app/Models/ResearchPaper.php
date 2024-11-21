<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ResearchPaper extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    protected  $guarded = [];

    public array $translatedAttributes = ['title','description'];

    public function research_paper_department(): BelongsTo
    {

        return $this->belongsTo(ResearchPaperDepartment::class,'research_department_id','id');
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
