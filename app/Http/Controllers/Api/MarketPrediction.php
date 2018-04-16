<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\MarketInfo;

class MarketPrediction extends Controller
{
    /**
     * Index function, display home page if logged in
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index(){
        return MarketInfo::all();
    }

    /**
     * Function to create a new record in the market info table
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request){
        $info = new MarketInfo();
        $info->market_name = $request->market_name;
        $info->date = $request->date;
        $info->prediction = $request->prediction;
        $info->prev_day_high = $request->prev_day_high;
        $info->prev_day_low = $request->prev_day_low;

        $info->save();

        return response()->json($info, 201);
    }
}
