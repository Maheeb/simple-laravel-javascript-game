<?php

namespace App\Http\Controllers;

use App\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    //
    public function index()
    {

        return view('bird_main');
    }

    public function store()
    {


    }

    public function detail(Request $request)
    {

        $score = $request->score;
        $score_int = intval($score);
        $input = array();
        $input['score'] = $score_int;

        $score_store = Score::create($input);
    }

    public function flappy_bird()
    {


        return view('flappy-bird');
    }

    public function ping_pong()
    {


        return view('ping_pong');
    }


    public function ping_pong_detail(Request $request)
    {

        $score = $request->score;
        $score_int = intval($score);
        $input = array();
        $input['score'] = $score_int;

        $score_store = Score::create($input);


    }


}
