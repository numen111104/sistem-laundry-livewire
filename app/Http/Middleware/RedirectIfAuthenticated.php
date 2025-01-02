<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $routeName = match (Auth::user()->role_id) {
                    User::ROLE_ADMIN => 'admin::dashboardAdmin',
                    User::ROLE_USER => 'user::dashboardUser',
                    User::ROLE_WALSAN => 'walsan::dashboardWalsan',
                };
                return redirect()->route($routeName);
            }
        }
        return $next($request);
    }
}
