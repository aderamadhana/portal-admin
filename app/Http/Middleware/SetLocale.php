<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $lang = $request->query('lang', config('app.locale', 'en'));

        if (! in_array($lang, ['en', 'id'])) {
            $lang = 'en';
        }

        App::setLocale($lang);

        return $next($request);
    }
}
