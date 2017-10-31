<?php

namespace Rhino\Http\Controllers;

use Validator;
use Rhino\Models\Card;
use Rhino\Models\Elder;
use Rhino\Models\Student;
use Rhino\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role_id','>',2)->with('card')->get();
        return view('user.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $card = Card::doesntHave('user')->latest()->get()->pluck('tag');
        return view('user.create', ['tag' => $card]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'city' => 'required',
            'colonia' => 'required',
            'postal' => 'required',
            'birthday' => 'required',
            'role_id' => 'required',
            'email' => 'required|unique:users|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('user/create')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            if($request->role_id == 3){
                $student = User::create([
                    'fname' => $request->fname,
                    'lname' => $request->lname,
                    'address' => $request->address,
                    'city' => $request->city,
                    'colonia' => $request->colonia,
                    'postal' => $request->postal,
                    'birthday' => $request->birthday,
                    'role_id' => 3,
                    'email' => $request->email,
                    'password' => bcrypt('student')
                ]);
                Student::create([
                    'school_id' => 1,
                    'user_id' => $student->id,
                    'SKU' => $request->tag,
                    'student_validated' => true
                ]);
                Card::updateOrCreate(['tag' => $request->tag],[
                    'user_id' => $student->id,
                    'valid_until' => \Carbon\Carbon::now()->addYear(),
                    'renew_approval' => true
                ]);
                return redirect()->action('UserController@index');
            }else{
                $elder =  User::create([
                    'fname' => $request->fname,
                    'lname' => $request->lname,
                    'address' => $request->address,
                    'city' => $request->city,
                    'colonia' => $request->colonia,
                    'postal' => $request->postal,
                    'birthday' => $request->birthday,
                    'role_id' => 4,
                    'email' => $request->email,
                    'password' => bcrypt('elder')
                ]);
                Elder::create([
                    'office_id' => 1,
                    'user_id' => $elder->id,
                    'SKU' => $request->tag
                ]);
                Card::updateOrCreate(['tag' => $request->tag],[
                    'user_id' => $elder->id,
                    'valid_until' => \Carbon\Carbon::now()->addYear(),
                    'renew_approval' => true
                ]);
                return redirect()->action('UserController@index');
            }
            return 'Algo salió mal :(';
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
}
