<?php

namespace App\Http\Controllers;
use App\Score;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function getIndex(){     $scores=Score::orderByTotal()
                                    ->orderBySubject()->get();
                                    $data=['scores'=>$scores];
                                    return view('board',$data); }
}