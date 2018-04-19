<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\NewsInfo;

class NewsInfoController extends Controller
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
     * Function to create a new news_info record for each news
     * headline
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request){
        foreach($request->news_headlines as $headline){
            $newsHeadline = new NewsInfo();

            $newsHeadline->date = $request->date;
            $newsHeadline->market_info_id = $request->prediction_id;
            $newsHeadline->news_headline = $headline;

            $newsHeadline->save();

        }

        return response()->json($newsHeadline, 201);
    }
}
