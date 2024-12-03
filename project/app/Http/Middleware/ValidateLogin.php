<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->isMethod('post')){
            $validateData = $request->only('username','password');


            $username = "admin";
            $password = "admin";

            if($validateData['username']===$username && $validateData['password']===$password){
                // return redirect()->route('gotodashboard');
                // return redirect()->away('https://netflix.com');
                return redirect()->route('gotodashboard')->with('confirm','login successfully');
            }else{
                return redirect()->back()->withError([$surname => 'username or password is in correct']);
            }
        }
        return $next($request);
    }



}
