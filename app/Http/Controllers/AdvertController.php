<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdvertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('advert.index', [
            'advert_list' => $this->getAdvertList()->sortByDesc('time_from'),
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('advert.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Session::get("user_session_key")) {
            return Redirect::to('/login')->withErrors(['err' => 'Для подачи заявки требуется регистрация']);
        } else {
        
        $advert = new Advert();

        
        $advert->user_id = Session::get("user_session_key")->id;

        $advert->user_phone = $request->request->get('user_phone');


        $advert->time_from = $request->request->get('time_from');
        $advert->start_address = $request->request->get('start_address');

        $advert->time_to = $request->request->get('time_to');
        $advert->end_address = $request->request->get('end_address');

        $advert->trip_description = $request->request->get('trip_description');

        $advert->participants_count = $request->request->get('participants_count');

        $advert->total_distance = $request->request->get('total_distance');
        $advert->track = $request->request->get('track');

        $advert->save();

        return Redirect::to('/advert')->with("success", "Ok");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    private function getAdvertList()
    {
        $advertList = Advert::all();
        $userIdList = [];
        foreach($advertList as $item) {
            $userIdList[] = $item->user_id;
        }

        $users = User::whereIn("id", $userIdList)->get();
       

        $avatars = [];
        $names = [];
        foreach($users as $item){
            $avatars[$item->id] = $item->user_avatar;
            $names[$item->id] = $item->name;
        }
        

        foreach($advertList as $item) {
            $item->user_avatar = $avatars[$item->user_id] ?? '';
            $item->name = $names[$item->user_id] ?? '';
        }
        // dd($advertList);
        return $advertList;
    }
}
