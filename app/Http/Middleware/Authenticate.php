<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authenticate
{
    public function handle(Request $request, Closure $next)
    {
        // cek apakah session user ada
        if (!session()->has('user')) {
            return redirect()->route('login.index');
        }

        return $next($request);
    }
}
