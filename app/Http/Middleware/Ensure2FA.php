<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Ensure2FA
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
{
    if (auth()->check() && auth()->user()->google2fa_enabled && !session('2fa_verified')) {
        return redirect()->route('verify.2fa');
    }

    return $next($request);
}

}
