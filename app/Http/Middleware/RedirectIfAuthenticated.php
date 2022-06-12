<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

                if($guard === 'admin'){
                    return redirect()->route('admin-dashboard');
                }
                if($guard === 'staff'){
                    return redirect()->route('staff-dashboard');
                }
                if($guard === 'customer'){
                    return redirect()->route('customer-dashboard');
                }
                return redirect()->route('user.home');
                // return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
