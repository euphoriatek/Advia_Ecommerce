<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect()->route('home'); 
        }

        return $next($request);
    }
}
// namespace App\Http\Middleware;

// use App\Providers\RouteServiceProvider;
// use Closure;
// use Illuminate\Support\Facades\Auth;

// class RedirectIfAuthenticated
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \Closure  $next
//      * @param  string|null  $guard
//      * @return mixed
//      */
//     public function handle($request, Closure $next, $guard = null)
//     {
//         if (Auth::guard($guard)->check()) {
//             // Prevent redirecting if the user is trying to access the login route
//             if ($request->routeIs('login.form')) {
//                 return $next($request);
//             }
//             return redirect(RouteServiceProvider::HOME);
//         }

//         return $next($request);
//     }
// }
