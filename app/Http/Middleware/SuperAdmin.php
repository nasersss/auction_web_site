<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $destinations = [
            1 => 'admin',
            2 => 'home',
        ];
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role != 0) {
            return redirect()->route($destinations[Auth::user()->role]);
        }
        return $next($request);
    }
}
