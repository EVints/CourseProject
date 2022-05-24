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
            !Session::has('user_session_key')
            && $request->cookie('user_token')
        ) {
            $user = User::where('token', $request->cookie('user_token'))->first();

            if ($user) {
                Session::put("user_session_key", $user);
            } else {
                Cookie::queue(Cookie::forget('user_token'));
            }
        }

        return $next($request);
    }
}
