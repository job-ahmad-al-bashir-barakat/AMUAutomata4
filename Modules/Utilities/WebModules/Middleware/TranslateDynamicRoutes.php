<?php

namespace Modules\Utilities\WebModules\Middleware;

use Closure;
use Modules\Utilities\Entities\Table;

class TranslateDynamicRoutes
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
        /*if ($request->route()->getName()) {
            list($morph, $id, $optional) = explode('.', $request->route()->getName());
            if ($morph === 'faculty') {
                $table = Table::whereMorphCode($morph)->get()->first();
                $model = $table->namespace;
                $data = $model::find($id);
                dd($data->toArray());
            }
        }*/
        //get record from table
        //generate url from record
        //compare url with current url
        //redirect to translated url
        return $next($request);
    }
}
