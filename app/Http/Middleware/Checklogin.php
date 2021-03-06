<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Checklogin
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
        if(! $request->session()->has('status')){
            return redirect()->route('dashboard.login')->with('notlogin','Harap Login Terlebih');
        }
        return $next($request);
    }
}
