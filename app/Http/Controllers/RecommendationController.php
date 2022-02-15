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
        return view('loggedIn/recommendation', compact('data', $data));
    }

    function save_occupancy(Request $request) {
        try {
            DB::insert('INSERT INTO occupancy (place, classroom, occupancy) VALUES (?, ?, ?)', [$request->school_place, $request->classroom, $request->occupValue]);

            return redirect('/recommendation')->with('success', 'Occupancy saved successfully');
        } catch (Exception $e) {
            return redirect('/recommendation')->with('failure', $e);
        }
    }
}
