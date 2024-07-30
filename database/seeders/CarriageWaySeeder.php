<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarriageWaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carriage_ways')->insert([
            'name' => 'Tuyến Cần Thơ - TP Hồ Chí Minh',
            'day_of_week' => 4,
            'trip_of_day' => 1,
            'average_travel_time' => 4,
            'distance' => 180,
            'car_station_id' => 2
        ]);
        DB::table('carriage_ways')->insert([
            'name' => 'Tuyến Cần Thơ - Tiền Giang',
            'day_of_week' => 4,
            'trip_of_day' => 1,
            'average_travel_time' => 4,
            'distance' => 180,
            'car_station_id' => 2
        ]);
        DB::table('carriage_ways')->insert([
            'name' => 'Tuyến Cần Thơ - Bến Tre',
            'day_of_week' => 4,
            'trip_of_day' => 1,
            'average_travel_time' => 3,
            'distance' => 180,
            'car_station_id' => 2
        ]);
        DB::table('carriage_ways')->insert([
            'name' => 'Tuyến Tiền Giang - TP Hồ Chí Minh',
            'day_of_week' => 4,
            'trip_of_day' => 1,
            'average_travel_time' => 2,
            'distance' => 180,
            'car_station_id' => 4
        ]);
        DB::table('carriage_ways')->insert([
            'name' => 'Tuyến Cao Lãnh - TP Hồ Chí Minh',
            'day_of_week' => 4,
            'trip_of_day' => 1,
            'average_travel_time' => 4,
            'distance' => 180,
            'car_station_id' => 7
        ]);
        DB::table('carriage_ways')->insert([
            'name' => 'Tuyến Hậu Giang - TP Hồ Chí Minh',
            'day_of_week' => 4,
            'trip_of_day' => 1,
            'average_travel_time' => 4,
            'distance' => 180,
            'car_station_id' => 6
        ]);
    }
}