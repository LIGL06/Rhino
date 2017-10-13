<?php

namespace Rhino\Http\Controllers;

use Rhino\Checkin;
use Illuminate\Http\Request;

class CheckinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Checkin Controller';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $checkins = Checkin::select('id')->get();
        return view('checkins.create', ['checkins'=> $checkins, ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Checkin::create([
            'checkin_id' => $request->checkin_id,
            'card_id' => $request->card_id,
            'bus_id' => $request->bus_id,
            'user_id' => $request->user_id
          ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Rhino\Checkin  $checkin
     * @return \Illuminate\Http\Response
     */
    public function show(Checkin $checkin)
    {
        return Checkin::whereId($id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Rhino\Checkin  $checkin
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkin $checkin)
    {
        return view('checkins.edit', ['checkin'=> Checkin::whereId($id)->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Rhino\Checkin  $checkin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkin $checkin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Rhino\Checkin  $checkin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkin $checkin)
    {
        //
    }
}
