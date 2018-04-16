<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MarketInfo;

class MarketPrediction extends Controller
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

    public function index(){
        $predictions = MarketInfo::all();

        return view('home', ['predictions' => $predictions]);
    }
}
