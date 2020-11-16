<?php

namespace App\Foundation\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class InjectAcceptJsonHeader
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data = $request->all();
        $request->headers->set('Accept', 'application/json');
        $request->headers->set('Content-Type', 'application/json');
        $request->merge($data);

        return $next($request);
    }
}
