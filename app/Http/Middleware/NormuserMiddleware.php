<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class NormuserMiddleware
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
        if(Auth::user()->usertype == 'user')
        {
            return $next($request);
        }
        else
        {
            return redirect('/');
        }  
    }
}
