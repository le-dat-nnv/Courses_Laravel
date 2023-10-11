<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class checkAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle($request, $next)
    {
        if (Auth()->guard('admin')->check()) {
            return $next($request);
        } else if (auth()->user()) {
            return redirect()->to('/');
        }
        else if(!Auth()->guard('admin')->check() && !auth()->user() ) {
            return redirect()->to('/');
        }
        return $next($request);
    }
}
