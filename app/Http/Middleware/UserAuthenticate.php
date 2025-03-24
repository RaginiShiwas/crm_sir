<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $guard = 'user')
    {
        if (!auth($guard)->check()) {
            return redirect()->route('login'); // Redirect to the login page if not authenticated.
        }
    
        return $next($request);
    }
    
}
