<?php

namespace App\Http\Middleware;

use Closure;

class LockScreen
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
        if(\Session::get('locked')) {
            return redirect(\RouteUrls::lockscreen());
        }

        return $next($request);
    }
}
