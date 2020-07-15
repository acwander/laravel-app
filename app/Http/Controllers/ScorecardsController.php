<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScorecardsController extends Controller
{
    // requires auth verification for anything in this control to display
    // if doesn't work Laravel takes user to login page
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('scorecards.create');
    }

    public function store()
    {
        $data = request()->validate([
            'course' => 'required',
            'date' => 'required',
            'distance1' => '',
            'distance2' => '',
            'distance3' => '',
            'distance4' => '',
            'distance5' => '',
            'distance6' => '',
            'distance7' => '',
            'distance8' => '',
            'distance9' => '',
            'distance10' => '',
            'distance11' => '',
            'distance12' => '',
            'distance13' => '',
            'distance14' => '',
            'distance15' => '',
            'distance16' => '',
            'distance17' => '',
            'distance18' => '',
            'par1' => '',
            'par2' => '',
            'par3' => '',
            'par4' => '',
            'par5' => '',
            'par6' => '',
            'par7' => '',
            'par8' => '',
            'par9' => '',
            'par10' => '',
            'par11' => '',
            'par12' => '',
            'par13' => '',
            'par14' => '',
            'par15' => '',
            'par16' => '',
            'par17' => '',
            'par18' => '',
            'player1' => 'required',
            'player1hole1' => '',
            'player1hole2' => '',
            'player1hole3' => '',
            'player1hole4' => '',
            'player1hole5' => '',
            'player1hole6' => '',
            'player1hole7' => '',
            'player1hole8' => '',
            'player1hole9' => '',
            'player1hole10' => '',
            'player1hole11' => '',
            'player1hole12' => '',
            'player1hole13' => '',
            'player1hole14' => '',
            'player1hole15' => '',
            'player1hole16' => '',
            'player1hole17' => '',
            'player1hole18' => '',
            'player2' => '',
            'player3' => '',
            'player4' => '',
        ]);

        // grab authenticated user, go to scorecards and use create many
        auth()->user()->scorecards()->create($data);

        dd(request()->all());
    }
}
