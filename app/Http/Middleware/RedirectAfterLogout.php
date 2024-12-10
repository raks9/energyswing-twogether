<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectAfterLogout
{
    /**
     * Handle an outgoing request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if ($request->is('monitoring/logout')) {
            return redirect('/login'); // Redirect ke /login
        }

        return $response;
    }
}
