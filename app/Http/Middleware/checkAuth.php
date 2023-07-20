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
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        if (!auth()->check()) {
            return redirect()->to('login');
        } else if (auth()->user()->role == 0) {
            return redirect()->to('/');
        }
        return $next($request);
    }
}
