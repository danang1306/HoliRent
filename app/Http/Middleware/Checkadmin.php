<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Checkadmin
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
        $role = $request->session()->get('role');
        if($role == 'user' ){
            $request->session()->forget(['name', 'email','role','status']);

            $request->session()->flush();
            return redirect()->route('dashboard.login')->with('notadmin','Anda tidak memiliki akses disini');
        }
        return $next($request);
    }
}
