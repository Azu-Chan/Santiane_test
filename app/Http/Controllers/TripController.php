<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Step;
use App\Models\Trip;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('add');
    }

    public function store (Request $request)
    {
        $validation = $request->validate([
            'trip_name' => 'required|max:30',
        ]);
        $trip = new Trip;
        $trip->name = $request->trip_name;

        $i = 1;
        $steps = array();

        $dynMember = 'type'.$i;
        
        while(isset($request->$dynMember)){
            $step = new Step;

            $request->validate([
                'type'.$i => 'required|in:plane,bus,train',
                'transport_number'.$i => 'required|max:10',
                'departure_date'.$i => 'max:16',
                'departure'.$i => 'max:30',
                'arrival_date'.$i => 'max:16',
                'arrival'.$i => 'max:30',
                'seat'.$i => 'max:5',
                'gate'.$i => 'max:5',
                'baggage_drop'.$i => 'max:5',
            ]);
            $step->type = $request->$dynMember;
            $dynMember = 'transport_number'.$i;
            $step->transport_number = $request->$dynMember;
            $dynMember = 'departure_date'.$i;
            if($request->$dynMember != null)
                $step->departure_date = (\DateTime::createFromFormat('d/m/Y H:i', $request->$dynMember))->format('Y-m-d H:i:s');
            else $step->departure_date = null;
            $dynMember = 'departure'.$i;
            $step->departure = $request->$dynMember;
            $dynMember = 'arrival_date'.$i;
            if($request->$dynMember != null)
                $step->arrival_date = (\DateTime::createFromFormat('d/m/Y H:i', $request->$dynMember))->format('Y-m-d H:i:s');
            else $step->arrival_date = null;
            $dynMember = 'arrival'.$i;
            $step->arrival = $request->$dynMember;
            $dynMember = 'seat'.$i;
            $step->seat = $request->$dynMember;
            $dynMember = 'gate'.$i;
            $step->gate = $request->$dynMember;
            $dynMember = 'baggage_drop'.$i;
            $step->baggage_drop = $request->$dynMember;

            array_push($steps, $step);
            $i++;
            $dynMember = 'type'.$i;
        }

        $trip->save();

        foreach($steps as $step){
            $step->trip_id = $trip->id;
            $step->save();
        }

        return '<h2>Voyagé crée avec succès</h2><br><a href="/">Retour à l\'accueil</a>';
    }
}