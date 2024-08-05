<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TheRidesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('the_rides')->insert(['name' => 'Cần Thơ - TP.Hồ Chí Minh', 'time_to_go' => '2024-07-28 06:00:00', 'estimated_arrival_time' => '2024-07-28 10:00:00', 'estimated_departure_time' => '2024-07-28 06:00:00', 'price' => 165.000, 'carriage_way_id' => 1, 'car_id' => 1]);
        DB::table('the_rides')->insert(['name' => 'Cần Thơ - TP.Hồ Chí Minh', 'time_to_go' => '2024-07-28 13:00:00', 'estimated_arrival_time' => '2024-07-28 17:00:00', 'estimated_departure_time' => '2024-07-28 13:00:00', 'price' => 165.000, 'carriage_way_id' => 1, 'car_id' => 2]);
        DB::table('the_rides')->insert(['name' => 'Cần Thơ - Vĩnh Long', 'time_to_go' => '2024-07-29 08:00:00', 'estimated_arrival_time' => '2024-07-29 10:00:00', 'estimated_departure_time' => '2024-07-29 08:00:00', 'price' => 165.000, 'carriage_way_id' => 2, 'car_id' => 3]);
        DB::table('the_rides')->insert(['name' => 'Cần Thơ - Vĩnh Long', 'time_to_go' => '2024-07-29 14:00:00', 'estimated_arrival_time' => '2024-07-29 16:00:00', 'estimated_departure_time' => '2024-07-29 14:00:00', 'price' => 165.000, 'carriage_way_id' => 2, 'car_id' => 2]);
        DB::table('the_rides')->insert(['name' => 'Cần Thơ - Hậu Giang', 'time_to_go' => '2024-07-29 08:00:00', 'estimated_arrival_time' => '2024-07-29 09:00:00', 'estimated_departure_time' => '2024-07-29 09:00:00', 'price' => 165.000, 'carriage_way_id' => 3, 'car_id' => 2]);
        DB::table('the_rides')->insert(['name' => 'Cần Thơ - Đồng Tháp', 'time_to_go' => '2024-07-29 08:00:00', 'estimated_arrival_time' => '2024-07-29 12:00:00', 'estimated_departure_time' => '2024-07-29 08:00:00', 'price' => 165.000, 'carriage_way_id' => 4, 'car_id' => 1]);
        DB::table('the_rides')->insert(['name' => 'Cần Thơ - Cà Mau', 'time_to_go' => '2024-07-29 06:00:00', 'estimated_arrival_time' => '2024-07-29 11:00:00', 'estimated_departure_time' => '2024-07-29 6:00:00', 'price' => 165.000, 'carriage_way_id' => 5, 'car_id' => 2]);
        DB::table('the_rides')->insert(['name' => 'Cần Thơ - Bến Tre', 'time_to_go' => '2024-07-29 07:00:00', 'estimated_arrival_time' => '2024-07-29 10:00:00', 'estimated_departure_time' => '2024-07-29 07:00:00', 'price' => 165.000, 'carriage_way_id' => 6, 'car_id' => 2]);
        DB::table('the_rides')->insert(['name' => 'Cần Thơ - Bến Tre', 'time_to_go' => '2024-07-29 12:00:00', 'estimated_arrival_time' => '2024-07-29 15:00:00', 'estimated_departure_time' => '2024-07-29 12:00:00', 'price' => 165.000, 'carriage_way_id' => 6, 'car_id' => 1]);
        DB::table('the_rides')->insert(['name' => 'Cần Thơ - TP.Hồ Chí Minh', 'time_to_go' => '2024-07-28 08:00:00', 'estimated_arrival_time' => '2024-07-28 08:00:00', 'estimated_departure_time' => '2024-07-28 12:00:00', 'price' => 165.000, 'carriage_way_id' => 2, 'car_id' => 1]);
        DB::table('the_rides')->insert(['name' => 'Cần Thơ - Tiền Giang', 'time_to_go' => '2024-07-28 08:00:00', 'estimated_arrival_time' => '2024-07-28 08:00:00', 'estimated_departure_time' => '2024-07-28 12:00:00', 'price' => 165.000, 'carriage_way_id' => 3, 'car_id' => 2]);
        DB::table('the_rides')->insert(['name' => 'Cao Lãnh - TP Hồ Chí Minh', 'time_to_go' => '2024-07-29 08:00:00', 'estimated_arrival_time' => '2024-07-29 08:00:00', 'estimated_departure_time' => '2024-07-29 12:00:00', 'price' => 165.000, 'carriage_way_id' => 6, 'car_id' => 2]);
    }
}
