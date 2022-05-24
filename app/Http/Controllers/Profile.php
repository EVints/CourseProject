<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class Profile extends Controller
{
    public function index()
    {
        if(!Session::get("user_session_key")) {
            return Redirect::to('/login')->withErrors(['err' => 'Для входа в личный кабинет требуется регистрация']);
        } else {
        return view('profile');}
    }
}
