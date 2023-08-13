<?php

namespace App\Http\Middleware;
use flash;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->session()->has('ADMIN_LOGIN')){

        }else{
            $request->session()->flash('error','Access denied');
            return redirect('admin');
        }
        return $next($request);
    }
}
