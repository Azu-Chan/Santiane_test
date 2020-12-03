<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $trips = json_decode(DB::table('trips')->orderBy('id', 'asc')->get(), true);

        foreach ($trips as &$trip) 
        {
            $trip['steps'] = array();
            $trip['steps'] = json_decode(DB::table('steps')->where('trip_id', $trip['id'])->orderBy('id', 'asc')->get(), true);
        }

        return view('welcome', ['trips' => $trips]);
    }
}