<?php

namespace App\Http\Controllers;

use App\Match;
use App\Event; 
use App\User; 
use Illuminate\Http\Request;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Match::all()->groupBy('event_id'); 
        return $matches; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all(); 
        $events = Event::all(); 
        return view('matches.create', compact('events','users')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matchOne = new Match(); 
        $matchOne->winner_id = $request->get('match_one_winner');
        $matchOne->loser_id = $request->get('match_one_loser'); 
        $matchOne->event_id = $request->get('event'); 
        $matchOne->save(); 

        $matchTwo = new Match(); 
        $matchTwo->winner_id = $request->get('match_two_winner');
        $matchTwo->loser_id = $request->get('match_two_loser'); 
        $matchTwo->event_id = $request->get('event'); 
        $matchTwo->save(); 

        $matchThree = new Match(); 
        $matchThree->winner_id = $request->get('match_three_winner');
        $matchThree->loser_id = $request->get('match_three_loser'); 
        $matchThree->event_id = $request->get('event'); 
        $matchThree->save(); 


        $matchFour = new Match(); 
        $matchFour->winner_id = $request->get('match_four_winner');
        $matchFour->loser_id = $request->get('match_four_loser'); 
        $matchFour->event_id = $request->get('event'); 
        $matchFour->save(); 

        return redirect('/home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matches = Match::all()->where('event_id', $id);
        return view('matches.show',compact('matches')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function edit(Match $match)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Match $match)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Match  $match
     * @return \Illuminate\Http\Response
     */
    public function destroy(Match $match)
    {
        //
    }
}
