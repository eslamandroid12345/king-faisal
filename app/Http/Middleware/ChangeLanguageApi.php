<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ChangeLanguageApi
{

    public function handle(Request $request, Closure $next)
    {

        app()->setLocale('ar');
        if($request->header('Accept-Language') == 'en' ){

            app()->setLocale('en');

        }elseif ($request->header('Accept-Language') == 'ch'){
            app()->setLocale('ch');

        }

        return $next($request);

    }
}
