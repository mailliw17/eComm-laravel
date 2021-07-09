<?php

namespace App\Http\Middleware;

use Closure;

class UserAuth
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
        // jika request path itu login dan udah ada session maka harus masuk 
        if ($request->path() == 'login' && $request->session()->has('user')) {
            return redirect('/');
        }
        return $next($request);
    }
}
