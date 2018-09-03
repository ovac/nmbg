<?php

namespace App\Http\Middleware;

use Closure;

class SetupProfile
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
        if ($request->user()->profile) {
            return $next($request);
        }

        return redirect('/setup/create');
    }
}
