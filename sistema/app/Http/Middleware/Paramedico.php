<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class Paramedico
{
    protected $auth;

    /**
    * Create a new filter instance.
    *
    * @param Guard $auth
    * @return void
    */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->rol == 0 )  //admin
        {
            if (Auth::user()->rol == 1) //paramedico
            {
                return redirect()->route('home');
            }
            else
            {
                return $next($request);
            }
        }
        else
        {
            return $next($request);
        }
    }
}