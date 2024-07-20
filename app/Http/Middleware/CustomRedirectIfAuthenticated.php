<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated as BaseRedirectIfAuthenticated;

class CustomRedirectIfAuthenticated extends BaseRedirectIfAuthenticated

{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }

    protected function redirectTo($request) : ?string // Adjust the method signature
    {
        if ($request->expectsJson()) {
            return response()->json(['message' => 'authenticated'], 200);
        } else {
            $userType = auth()->user()->usertype; // Get user's usertype
            return $userType === 1 ? '/admin/home' : '/dashboard';
        }
    }
}
