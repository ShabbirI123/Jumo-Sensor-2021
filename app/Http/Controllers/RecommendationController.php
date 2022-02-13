<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use File;

class RecommendationController extends Controller
{
    public function get_recommendation(){
        $data = DB::select('SELECT jumo_predict FROM jumo_prediction ORDER BY createdAt DESC LIMIT 1');
        return view('loggedIn/recommendation', compact('data'));
    }
}
