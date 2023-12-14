<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        // if (Auth::check()) {
        //     return redirect('/dashboard');
        // }

        // return $next($request);

        $token = Session::get('bearer');

        if (!isset($token)) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
