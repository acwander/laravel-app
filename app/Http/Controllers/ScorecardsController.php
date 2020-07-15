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
            'player2hole1' => '',
            'player2hole2' => '',
            'player2hole3' => '',
            'player2hole4' => '',
            'player2hole5' => '',
            'player2hole6' => '',
            'player2hole7' => '',
            'player2hole8' => '',
            'player2hole9' => '',
            'player2hole10' => '',
            'player2hole11' => '',
            'player2hole12' => '',
            'player2hole13' => '',
            'player2hole14' => '',
            'player2hole15' => '',
            'player2hole16' => '',
            'player2hole17' => '',
            'player2hole18' => '',
            'player3' => '',
            'player3hole1' => '',
            'player3hole2' => '',
            'player3hole3' => '',
            'player3hole4' => '',
            'player3hole5' => '',
            'player3hole6' => '',
            'player3hole7' => '',
            'player3hole8' => '',
            'player3hole9' => '',
            'player3hole10' => '',
            'player3hole11' => '',
            'player3hole12' => '',
            'player3hole13' => '',
            'player3hole14' => '',
            'player3hole15' => '',
            'player3hole16' => '',
            'player3hole17' => '',
            'player3hole18' => '',
            'player4' => '',
            'player4hole1' => '',
            'player4hole2' => '',
            'player4hole3' => '',
            'player4hole4' => '',
            'player4hole5' => '',
            'player4hole6' => '',
            'player4hole7' => '',
            'player4hole8' => '',
            'player4hole9' => '',
            'player4hole10' => '',
            'player4hole11' => '',
            'player4hole12' => '',
            'player4hole13' => '',
            'player4hole14' => '',
            'player4hole15' => '',
            'player4hole16' => '',
            'player4hole17' => '',
            'player4hole18' => '',
        ]);

        // grab authenticated user, go to scorecards and use create many
        auth()->user()->scorecards()->create($data);

        dd(request()->all());
    }
}
