<?php

namespace App\Http\Controllers;

use App\Score;
use Illuminate\Http\Request;

class SnakeController extends Controller
{
    //
    public function index()
    {

        return view('snake');
    }

    public function snake_score_detail(Request $request)
    {
        $score = $request->score;
        $score_int = intval($score);
        $input = array();
        $input['score'] = $score_int;

        $score_store = Score::create($input);

    }

}
