<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class age
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        echo "This is from  age middleware";
        if($request->age>10)
        {
            echo "Age is entered grater than 10";
        }
        else
        {
            echo "Age is not entered grater than 10";
        }

        return $next($request);
    }
}
