<?php

namespace App\Http\Middleware;

use Closure;
use Brian2694\Toastr\Facades\Toastr;
class MakeDemo
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
        if($request->isMethod('post') || $request->isMethod('put') || $request->isMethod('destroy')){
            Toastr::error('Access denied', 'You do not have the permission to create');
            return redirect()->back()->withErrors('You do not have the permission to create');
        }else{
             return $next($request);
        }
       

    }
}
?>