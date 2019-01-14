<?php

namespace App\Http\Middleware;

use Closure;

class adminSession
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
        if($request->session()->get('user')->user_type_id!=1){
            return redirect()->route('home.index');
        }
        return $next($request);
    }
}
