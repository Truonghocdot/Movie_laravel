<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class VerifyAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1) {
                return $next($request);
            } elseif ($user->role == 0) {
                Auth::logout();
                return redirect()->route('admin.login')->withErrors(['wait' => 'You have not permission for access this page!']);
            } else {
                Auth::logout();
                return redirect()->route('admin.login')->withErrors(['wait' => 'Our management will contact you within 24 hours!']);
            }
        } else {
            return redirect()->route('admin.login')->withErrors(['wait' => 'You must login before access this page!']);
        }
    }
}
