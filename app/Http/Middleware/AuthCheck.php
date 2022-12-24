<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AuthCheck
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
        if ($request->session()->get('user')) {
            $nameRoute = explode('.', trim(Route::currentRouteName()))[0];
            if (($nameRoute == 'user' || $nameRoute == 'tickettype') && session()->get('user')['role'] != '1') {
                return back()->with('message', "Anda tidak mempunyai akses");
            }

            return $next($request);
        }

        return redirect()->route('user.logout');
    }
}
