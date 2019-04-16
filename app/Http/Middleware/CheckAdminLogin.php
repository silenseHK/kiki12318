<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdminLogin
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
        if(!$request->session()->has('admin_info')){
            return redirect('/admin/err')->with(['url'=>'/admin/login','msg'=>'您未登录,请先登录']);
        }else{
            return $next($request);
        }
    }
}
