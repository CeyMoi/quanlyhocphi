<?php

namespace App\Http\Middleware;

use Closure;

class CheckAuthClient
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param string $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'sinh_vien')
    {
        if (!\Auth::guard($guard)->check()) {
            return redirect()->route('client.auth.login')->with('email',$request->email);
        }
        return $next($request);
    }
}
