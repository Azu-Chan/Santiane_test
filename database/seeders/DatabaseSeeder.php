<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Trip::create(
            [
                'name' => 'Voyage 1',
            ]
        );

        \App\Models\Trip::create(
            [
                'name' => 'Voyage 2',
            ]
        );

        \App\Models\Step::create(
            [
                'trip_id' => 1,
                'type' => 'plane',
                'transport_number' => 'SK22',
                'departure' => 'Stockholm',
                'arrival' => 'New York JFK',
                'seat' => '7B',
                'gate' => '22',
                'baggage_drop' => null,
            ]
        );

        \App\Models\Step::create(
            [
                'trip_id' => 1,
                'type' => 'bus',
                'transport_number' => 'airport',
                'departure' => 'Barcelona',
                'arrival' => 'Gerona Airport',
                'seat' => null,
            ]
        );

        \App\Models\Step::create(
            [
                'trip_id' => 1,
                'type' => 'plane',
                'transport_number' => 'SK455',
                'departure' => 'Gerona Airport',
                'arrival' => 'Stockholm',
                'seat' => '3A',
                'gate' => '45B',
                'baggage_drop' => '344',
            ]
        );

        \App\Models\Step::create(
            [
                'trip_id' => 1,
                'type' => 'train',
                'transport_number' => '78A',
                'departure' => 'Madrid',
                'arrival' => 'Barcelona',
                'seat' => '45B',
            ]
        );

        \App\Models\Step::create(
            [
                'trip_id' => 2,
                'type' => 'bus',
                'transport_number' => 'B1',
                'departure' => 'Grasse',
                'arrival' => 'Cannes',
                'seat' => null,
            ]
        );

        \App\Models\Step::create(
            [
                'trip_id' => 2,
                'type' => 'train',
                'transport_number' => 'TER-A',
                'departure' => 'Cannes',
                'arrival' => 'Nice Riquier',
                'seat' => null,
            ]
        );

        \App\Models\Step::create(
            [
                'trip_id' => 2,
                'type' => 'bus',
                'transport_number' => 'B2',
                'departure' => 'Nice Riquier',
                'arrival' => 'Nice',
                'seat' => null,
            ]
        );

        \App\Models\Step::create(
            [
                'trip_id' => 2,
                'type' => 'plane',
                'transport_number' => 'P455',
                'departure' => 'Nice',
                'arrival' => 'Paris',
                'seat' => '3A',
                'gate' => '45B',
                'baggage_drop' => null,
            ]
        );

        \App\Models\Step::create(
            [
                'trip_id' => 2,
                'type' => 'plane',
                'transport_number' => 'P42',
                'departure' => 'Paris',
                'arrival' => 'Londre',
                'seat' => '96B',
                'gate' => '12',
                'baggage_drop' => '123',
            ]
        );

        \App\Models\Step::create(
            [
                'trip_id' => 2,
                'type' => 'train',
                'transport_number' => 'T9 3/4',
                'departure' => 'Londre',
                'arrival' => 'Hogharts Castle',
                'seat' => '6',
            ]
        );
    }
}
