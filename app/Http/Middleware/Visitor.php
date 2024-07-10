<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visit;
class Visitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $visit = new Visit() ;
        $visit->url  = $request->fullUrl();
        $visit->ip_address = $request->ip();
        $visit->user_agent = $request->userAgent();
        $visit->save();
        return $next($request);
    }
}
