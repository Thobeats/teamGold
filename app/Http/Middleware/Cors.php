<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request)
            ->header('Access-Allow-Control-Origin', '*')
            ->header('Access-Allow-Control-Methods', 'PUT,POST,DELETE,GET,OPTIONS')
            ->header('Access-Allow-Control-Headers', "Accept,Authorization,Content-type");
    }
}
