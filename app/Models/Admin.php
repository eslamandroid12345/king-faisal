<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $guarded = [];


    public function image() : Attribute {
        return Attribute::get(
            get: function ($value) {
                if ($value !== null) {
                    return url($value);
                }
                return url('V2/img/admin.jpg');
            }
        );
    }

    public function checkStatus() : Attribute {
        return Attribute::get(
            get: function () {

                return $this->is_active == 1 ? __('dashboard.active') : __('dashboard.not_active');

            }
        );
    }


}
