<?php

namespace Rhino\Http\Controllers;

use Rhino\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'School Controller';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools = School::select('name','id')->get();
        return view('schools.create', ['schools'=> $schools, ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return School::create([
            'school_id' => $request->school_id,
            'address' => $request->address,
            'name' => $request->name
          ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Rhino\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        return School::whereId($id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Rhino\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        return view('schools.edit', ['school'=> School::whereId($id)->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Rhino\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Rhino\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }
}
