<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

if(!function_exists('lang')){

    function lang(){
        return Config::get('app.locale');

    }
}

if(!function_exists('admin')){

    function admin(): ?\Illuminate\Contracts\Auth\Authenticatable
    {
        return auth('admin')->user();

    }
}


if(!function_exists('userId')){

    function userId()
    {
        return auth('user-api')->id();

    }
}





