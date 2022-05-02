<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;

class CookieLogin
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

        if (
            !Session::has('user-session-key')
            && $request->cookie('user-token')
        ) {
            $user = User::where('token', $request->cookie('user-token'))->first();

            if ($user) {
                Session::put("user-session-key", $user);
            } else {
                Cookie::queue(Cookie::forget('user-token'));
            }
        }

        return $next($request);
    }
}
