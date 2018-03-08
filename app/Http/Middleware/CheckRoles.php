<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $nex
t     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        var_dump($request->session()->has('users'));
        if ($request->route()->getName() !== 'client_login') {
            if (!$request->session()->has('users')) {
                return redirect()->route('client_login');
            }
        }

        return $next($request);
    }
}
