<?php

namespace App\Http\Middleware;

use Route;
use Session;
use Closure;

class JwtAuthentication
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
        if(empty(Session::get('data.auth_token.authorization')) === true) {
            return redirect()->route('getLogin')->with('error', 'Unauthorised access');
        } 

        return $next($request);
    }
}
