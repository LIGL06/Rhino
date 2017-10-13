<?php

namespace Rhino\Http\Controllers;

use Rhino\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Office Controller';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offices = Office::select('name','id')->get();
        return view('offices.create', ['offices'=> $offices, ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Office::create([
            'office_id' => $request->office_id,
            'address' => $request->address,
            'name' => $request->name
          ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Rhino\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function show(Office $office)
    {
        return Office::whereId($id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Rhino\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function edit(Office $office)
    {
        return view('offices.edit', ['office'=> Office::whereId($id)->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Rhino\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Office $office)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Rhino\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function destroy(Office $office)
    {
        //
    }
}
