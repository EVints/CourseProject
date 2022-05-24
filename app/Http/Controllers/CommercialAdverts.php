<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commercial;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CommercialAdverts extends Controller
{
    public function index()
    {
        return view('commercial.index', [
            'commercial_list' => $this->getCommercialList()->reverse(),
        ]);
    }


    public function commercial_create_show()
    {
        if (Session::has('user_session_key')) {
            if (Session::get('user_session_key')->super_user) {
                return view('commercial.create');
            }else {
            return Redirect::to('/login')->withErrors(['err' => 'Вы не администратор сайта']);
        }
        } else {
            return Redirect::to('/login')->withErrors(['err' => 'Вы не администратор сайта']);
        }
    }

    public function commercial_create(Request $request) {

        $commercial_advert = new Commercial();

        
        $commercial_advert->user_id = Session::get("user_session_key")->id;

        $commercial_advert->user_phone = $request->request->get('user_phone');


        $commercial_advert->time_from = $request->request->get('time_from');
        $commercial_advert->start_address = $request->request->get('start_address');

        $commercial_advert->time_to = $request->request->get('time_to');
        $commercial_advert->end_address = $request->request->get('end_address');

        $commercial_advert->trip_description = $request->request->get('trip_description');

        $commercial_advert->participants_count = $request->request->get('participants_count');

        $commercial_advert->total_distance = $request->request->get('total_distance');
        $commercial_advert->track = $request->request->get('track');

        $commercial_advert->save();

        return Redirect::to('/journey')->with("success", "Ok");

    }


    private function getCommercialList() {
        $commercialList = Commercial::all();
        $userIdList = [];
        foreach($commercialList as $item) {
            $userIdList[] = $item->user_id;
        }

        

        $users = User::whereIn("id", $userIdList)->get();

        $avatars = [];
        $names = [];
        foreach($users as $item){
            $avatars[$item->id] = $item->user_avatar;
            $names[$item->id] = $item->name;
        }
        

        foreach($commercialList as $item) {
            $item->user_avatar = $avatars[$item->user_id] ?? '';
            $item->name = $names[$item->user_id] ?? '';
        }
        // dd($advertList);
        return $commercialList;
    }
}
