<?php

namespace myRoommie\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        /*if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }*/
        switch ($guard) {
            case 'hosteller':
                if (Auth::guard($guard)->check()) {
                    return redirect()->intended(route('dashboard.hostel'));

                }
                break;
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect()->intended(route('student'));
                }
                break;
        }
        return $next($request);
    }
}
