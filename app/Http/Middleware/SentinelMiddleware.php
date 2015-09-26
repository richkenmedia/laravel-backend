<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class SentinelMiddleware
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
        if ($user = Sentinel::check())
        {
            return $next($request);
        }
        else
        {
            return redirect('auth/login');
        }
        
    }
}
