<?php

namespace App\Http\Middleware;

use Closure;

class CheckLogin
{
    
    public function handle($request, Closure $next)
    {
        if ($request->session()->has('ma_ke_toan')) {
            return $next($request);
        }else{
            return redirect()->route('view_login')->with('error', 'Chưa đăng nhập!');
        }

    }
}
