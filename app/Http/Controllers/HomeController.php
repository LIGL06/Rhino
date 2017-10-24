<?php

namespace Rhino\Http\Controllers;

use Rhino\Models\Elder;
use Rhino\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::whereHas('user.checkin')->count();
        $elders = Elder::whereHas('user.checkin')->count();
        return view('home', ['students'=>$students,'elders'=>$elders]);
    }
}
