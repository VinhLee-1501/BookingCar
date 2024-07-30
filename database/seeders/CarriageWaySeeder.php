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
        $carStationIds = DB::table('stations')->pluck('id','name')->toArray();
        DB::table('carriage_ways')->insert([
            [
                'name' => 'Cần Thơ - Vĩnh Long',
                'day_of_week'=>5,
                'trip_of_day' =>2,
                'average_travel_time'=>3,
                'distance'=>35,
                'car_station_id' => $carStationIds['Bến xe TT Cần Thơ'] ,


            ],
            [
                'name' => 'Vĩnh Long - Cần Thơ',
                'day_of_week'=>5,
                'trip_of_day' =>2,
                'average_travel_time'=>3,
                'distance'=>35,
                'car_station_is' => $carStationIds['Bến xe TT Vĩnh Long'],
            ],[
                'name' => 'Đồng Tháp - Vĩnh Long',
                'day_of_week'=>5,
                'trip_of_day' =>2,
                'average_travel_time'=>3,
                'distance'=>35,
                'car_station_is' => $carStationIds['Bến xe TT Đồng Tháp'] ,
            ],[
                'name' => 'Hậu Giang - Cần Thơ',
                'day_of_week'=>5,
                'trip_of_day' =>2,
                'average_travel_time'=>3,
                'distance'=>35,
                'car_station_is' => $carStationIds['Bến xe TT Hậu Giang'],
            ],
        ]);
    }
}