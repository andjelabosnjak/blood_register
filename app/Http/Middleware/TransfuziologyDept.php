<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class TransfuziologyDept
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::check() || Auth::user()->user_type != 'transfuziology_dept')
        {
            return redirect()->route('home')->with('error','Access denied!');
        }

        return $next($request);
    }
}
