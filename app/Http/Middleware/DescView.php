<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Movies;

class DescView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next ): Response
    {
        $input = explode('/',$request->path()) ;
        $movie = Movies::where('slug',$input[1])->first();
        $movie->update([
            'view' => $movie->view + 1
        ]);
        return $next($request);
    }
}
