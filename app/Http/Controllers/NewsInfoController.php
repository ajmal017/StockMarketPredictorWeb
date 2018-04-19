<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsInfo;

class NewsInfoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get the headlines used for a given prediction.
     *
     * @param $prediction_id
     * @return mixed
     */
    public function getHeadlines($prediction_id){
        $headlines = NewsInfo::all()->where('market_info_id', $prediction_id);

        return $headlines;
    }
}
