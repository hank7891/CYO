<?php

namespace App\Http\Middleware;

use Closure;

class chkLogin
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
        if (!$request->session()->get('has_login')) {
            return redirect()->route('admin.loginShow');
        }
        return $next($request);
    }
}
