<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User as ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role_id === ModelUser::ROLE_USER) {
            return $next($request);
        }

        return redirect(route('login'));
    }
}
