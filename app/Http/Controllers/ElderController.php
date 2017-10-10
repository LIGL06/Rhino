<?php

namespace App\Http\Controllers;

use App\Elder;
use Illuminate\Http\Request;

class ElderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Elde Controller';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $persons = User::select('name','id')->get();
        return view('elders.create', ['persons'=> $persons, ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Elder::create([
            'elder_id' => $request->elder_id,
            'office_id' => $request->office_id,
            'user_id' => $request->user_id,
            'SKU' => $request->SKU
          ]);
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Elder  $elder
     * @return \Illuminate\Http\Response
     */
    public function show(Elder $elder)
    {
        return Elder::whereId($id)->with('user')->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Elder  $elder
     * @return \Illuminate\Http\Response
     */
    public function edit(Elder $elder)
    {
        return view('elders.edit', ['elder'=> Elder::whereId($id)->with('user')->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Elder  $elder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Elder $elder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Elder  $elder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Elder $elder)
    {
        //
    }
}
