<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        // if(auth()->check() && auth()->user()->is_admin == 1){
        if(auth()->user()->isAdmin==1){

            return $next($request);
            //  return view('Backend_Pages/adminLogin');

        }

       
        else{

            // return "no redirection";
            return redirect()->intended('/home');

        }
    }
}
