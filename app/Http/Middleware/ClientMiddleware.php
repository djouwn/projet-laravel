<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ClientMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        
        if (!auth()->check() || auth()->user()->role !== 'client') {
            
            return redirect('/')->with('error', 'You do not have client access.');
        }

        return $next($request);
    }
}
