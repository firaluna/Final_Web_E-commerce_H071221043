<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle(Request $request, Closure $next): Response
    {

        if (Auth::check()){
            if (Auth::user()->role == 'admin') {
                return $next($request);
            } else if (Auth::user()-> role == 'buyer') {
                return redirect('buyer');
            } else {
                return redirect('user');
            }
        } else {
            return redirect('/login')->with('message', 'Please Login First!');
        }
    }
}
