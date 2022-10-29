<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CustomAuth
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
        /*
        if(Auth::check()){
            return redirect('/dashboard');
        }
        else{
            return redirect('/');
        }
       /* $path=$request->path();
        if(($path=='login'|| $path=='register') && Session::get('user'))
        {
            return redirect('/dashboard');
        }*/
        return $next($request);
    }
    
}
