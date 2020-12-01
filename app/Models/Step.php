<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'transport_number',
        'departure_date',
        'departure',
        'arrival_date',
        'arrival',
        'seat',
        'gate',
        'baggage_drop',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'trip_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'departure_date',
        'arrival_date',
    ];
}
