<?php

namespace App\Http\Middleware;

use Session;
use Closure;

class Login
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
            return $next($request);
        } else {
            return redirect()->route('dashboard');
        }
    }
}
