<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Card;
use App\Models\User;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Card controller';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $persons = User::select('name','id')->get();
        return view('cards.create', ['persons'=> $persons, ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Card::create([
          'user_id' => $request->user_id,
          'tag' => $request->tag,
          'valid_until' => Carbon::now()->addYear(),
          'renew_approval' => false
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Card::whereId($id)->with('user')->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('cards.edit', ['card'=> Card::whereId($id)->with('user')->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Card::whereId($id)->update([
            'renew_approval'=> $request->renew_approval,
        ]);
        $request->session()->flash('message','Tarjeta actualizada');
        return redirect()->action('CardController@edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
