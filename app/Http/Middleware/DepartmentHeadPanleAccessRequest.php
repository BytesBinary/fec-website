<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class DepartmentHeadPanleAccessRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if( ! Auth::check() ) {
            return redirect()->route('landing');
        }
        if( ! auth()->user()->role == 'dept-head' ) {
            session()->flash('error', 'You are not authorized to access this panel.');
            return redirect('landing');
        }
        return $next($request);
    }
}
