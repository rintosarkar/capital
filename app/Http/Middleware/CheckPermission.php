<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission = null)
    {
        if(!app('illuminate\Contracts\Auth\Guard')->guest()){
            if($request->user()->can($permission)){
                return $next($request);
            }
        }
        return $request->ajax ? response('Unauthorized.', 401) : redirect('/auth/login');
    }
}
