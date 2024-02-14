<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is an admin
        // if (auth()->check() && auth()->user()->user()) {
        //     return $next($request);
        // }
        if(Auth::id()){
            $role=Auth()->user()->role;
            if($role=='admin'){
                return $next($request);
            }
        }

        // Redirect to a different page or show an error
        return redirect()->back()->with('error', 'Unauthorized access.');
    }
}
