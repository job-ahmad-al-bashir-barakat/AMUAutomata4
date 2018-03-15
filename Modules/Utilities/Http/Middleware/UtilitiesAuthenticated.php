<?php

namespace Modules\Utilities\Http\Middleware;

use Closure;

class UtilitiesAuthenticated
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
        //todo remove comment for automata check
        /*if (\Auth::user()->user_type == 'automata') {
            return $next($request);
        }*/


        //dd($request->route()->getName());
        // get permission of the url for current user
        // check-it
        return $next($request);
    }
}
