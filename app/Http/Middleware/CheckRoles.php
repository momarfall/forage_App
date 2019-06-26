<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $rolesArray=explode("|",$roles);
        if (! $request->user()->hasAnyRoles($rolesArray)) {
            return redirect()->('home')>with(['permission'=>"Action non autorisée"]);
            // Redirect...
        }

        return $next($request);
    }

}