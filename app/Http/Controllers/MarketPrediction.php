<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MarketInfo;
use App\Http\Controllers\NewsInfoController;

/**
 * @property \App\Http\Controllers\NewsInfoController prediction_info
 */
class MarketPrediction extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->prediction_info = new NewsInfoController();
    }

    /**
     * Display all of the market predictions for the home page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $predictions = MarketInfo::all();

        return view('home', ['predictions' => $predictions]);
    }

    /**
     * Function to get all the information (News Headlines) for a given
     * market prediction
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function predictionInformation($id){
        $headlines = $this->prediction_info->getHeadlines($id);
        $prediction = MarketInfo::all()->where('id' , $id)->first();

        return view('prediction', ['headlines' => $headlines, 'prediction' => $prediction]);
    }
}
