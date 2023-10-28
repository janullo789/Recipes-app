<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * @param $request
     * @param Closure $next
     * @return Application|\Illuminate\Foundation\Application|RedirectResponse|Redirector|mixed
     */
    public function handle($request, Closure $next)
    {
        if (!auth()->user() || auth()->user()->role !== 'admin') {
            return redirect('/login');
        }

        return $next($request);
    }

}
