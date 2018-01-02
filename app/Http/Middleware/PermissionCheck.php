<?php

namespace App\Http\Middleware;

use Closure;

class PermissionCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission = null)
    {
        if(canAccess($permission)) {
            return $next($request);
        }

        if($request->ajax){
            return response('Unauthorized.', 401);
        }
        
        return response('Unauthorized.', 401);
    }
}
