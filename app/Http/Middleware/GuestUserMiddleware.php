<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class GuestUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (Auth::check()) {
        //     return redirect()->route('dashboard'); // Redirect to the dashboard if already logged in
        // }

        if (auth()->check()) {
            $role = auth()->user()->roles;
    
            if ($role == 2) {
                return redirect('/agent');
            } elseif ($role == 3) {
                return redirect('/home');
            } elseif($role == 1){
                return redirect('admin/home');
            }
        }
        
        return $next($request);
    }
}
