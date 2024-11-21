<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RequestInformation extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'request_information';


    public function user(): BelongsTo
    {

        return $this->belongsTo(User::class,'user_id','id');
    }



    public function result() : Attribute {
        return Attribute::get(
            get: function () {
                if ($this->status == 'accept') {
                    return 'الموضوع غير مبحوث';
                }elseif ($this->status == 'refused'){
                    return 'الموضوع مبحوث';
                }else{
                    return 'الطلب تحت المعالجه';
                }
            }
        );
    }
}
