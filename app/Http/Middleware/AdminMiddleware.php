<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
   
        if (!auth()->check() || auth()->user()->role !== 'admin') {
           
            return redirect('/')->with('error', 'You do not have admin access.');
        }

        return $next($request);
    }
}
