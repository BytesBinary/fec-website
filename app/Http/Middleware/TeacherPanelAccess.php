<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TeacherPanelAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if( ! Auth::check() ){
            return redirect()->route('landing');
        }
        if( auth()->user()->role !== 'teacher' ) {
            return redirect()->route('landing');
        }

        return $next($request);
    }
}
