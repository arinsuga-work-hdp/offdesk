<?php

namespace Arins\Bo\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$pRoles)
    {

        if (\Arins\Facades\Roles::fullControl()) {

            return $next($request);

        } //end if


        if (\Arins\Facades\Roles::only($pRoles)) {

            return $next($request);

        }

        abort(403, 'Unauthorized action.');
    }
}
