<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticate
{
    /**
     * 
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $guard = 'admin')
    {
        if (!auth($guard)->check()) {
            return redirect()->route('admin.login'); // Redirect to the admin login page if not authenticated.
        }
    
        return $next($request);
    }
    
    
}
