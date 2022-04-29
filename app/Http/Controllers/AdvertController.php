<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdvertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('advert.index', ['advert_list' => Advert::all()]);
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
        $advert = new Advert();

        // $table->integer('user_id');
        // $table->dateTime('from');
        // $table->dateTime('to');
        // $table->json('meet')->nullable();
        // $table->json('finish')->nullable();
        // $table->json('ride')->nullable();
        // $table->integer('meet_radius');
        // $table->integer('ride_radius');
        // $table->integer('type');
        // $table->text('description');

        $advert->user_id = 1;
        $advert->from = $request->request->get('from');
        $advert->to = $request->request->get('to');
        $advert->meet = "[" . $request->request->get('point_meet') . "]";
        $advert->finish = "[" . $request->request->get('point_end') . "]";
        $advert->type = $request->request->get('type');
        $advert->meet_radius = 1;
        $advert->ride_radius = 1;
        $advert->description = "desc";



        $advert->save();

        return Redirect::to('/advert')->with("success", "Ok");

        // dd($request);
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
}
