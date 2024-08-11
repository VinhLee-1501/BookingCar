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
        $carStationIds = DB::table('stations')->pluck('id', 'name')->toArray();
        DB::table('carriage_ways')->insert([
            [
                'name' => 'Cần Thơ - TP Hồ Chí Minh',
                'day_of_week' => 5,
                'trip_of_day' => 2,
                'average_travel_time' => 4,
                'distance' => 160,
                'car_station_to' => $carStationIds['Bến xe TT Cần Thơ'],
                'car_station_from' => $carStationIds['Bến xe TP Hồ Chí Minh'],
            ],
            [
                'name' => 'Cần Thơ - Vĩnh Long',
                'day_of_week' => 5,
                'trip_of_day' => 2,
                'average_travel_time' => 2,
                'distance' => 60,
                'car_station_to' => $carStationIds['Bến xe TT Cần Thơ'],
                'car_station_from' => $carStationIds['Bến xe TT Vĩnh Long'],
            ],
            [
                'name' => 'Cần Thơ - Hậu Giang',
                'day_of_week' => 5,
                'trip_of_day' => 2,
                'average_travel_time' => 1,
                'distance' => 40,
                'car_station_to' => $carStationIds['Bến xe TT Cần Thơ'],
                'car_station_from' => $carStationIds['Bến xe TT Hậu Giang'],
            ],
            [
                'name' => 'Cần Thơ - Đồng Tháp',
                'day_of_week' => 5,
                'trip_of_day' => 2,
                'average_travel_time' => 4,
                'distance' => 79,
                'car_station_to' => $carStationIds['Bến xe TT Cần Thơ'],
                'car_station_from' => $carStationIds['Bến xe TT Đồng Tháp'],
            ],
            [
                'name' => 'Cần Thơ - Cà Mau',
                'day_of_week' => 5,
                'trip_of_day' => 2,
                'average_travel_time' => 5,
                'distance' => 142,
                'car_station_to' => $carStationIds['Bến xe TT Cần Thơ'],
                'car_station_from' => $carStationIds['Bến xe TT Cà Mau'],
            ],
            [
                'name' => 'Cần Thơ - Bến Tre',
                'day_of_week' => 5,
                'trip_of_day' => 2,
                'average_travel_time' => 3,
                'distance' => 120,
                'car_station_to' => $carStationIds['Bến xe TT Cần Thơ'],
                'car_station_from' => $carStationIds['Bến xe TT Bến Tre'],
            ],
        ]);
    }
}