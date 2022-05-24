<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\SubmitAdvertModel;

class SubmitAdvert extends Controller
{
    public function submitAdd(Request $request){

        if(!Session::get("user_session_key")) {
            return Redirect::to('/login')->withErrors(['err' => 'Для подачи заявки требуется авторизация']);
        } else {
        
        $submit_advert = new SubmitAdvertModel();

        
        $submit_advert->advert_id = $request->request->get('advert_id');
        $submit_advert->submit_user_id = Session::get("user_session_key")->id;

        $submit_advert->save();

        return Redirect::to('/advert')->with("success", "Ok");
        }

    }
}
