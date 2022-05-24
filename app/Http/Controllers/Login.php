<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Cookie;

class Login extends Controller
{
    public function login()
    {
        return view('reg_form.index');
    }

    public function getLogin(Request $request)
    {
        $user = User::where('email', $request->request->get('email'))
            ->where('password', hash('sha256', $request->request->get('password')))
            ->get();

        if ($user->count() == 1) {
            $currentUser = $user->first();
            $currentUser->token = hash('sha256', rand(1000, 100000) . md5(time()));
            $currentUser->save();
            Session::put("user_session_key", $currentUser);



            return redirect('/')->withCookie(new Cookie('user_token', $currentUser->token, 525600));
        } else {
            return redirect('/login')->withErrors(['err' => 'Пользователь не найден']);
        }
    }

    public function logOut(Request $request) {
        
        $request->session()->forget('user_session_key');
        return redirect('/');
           
         }
}

