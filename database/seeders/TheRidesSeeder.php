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
        DB::table('the_rides')->insert(
            [
                [
                    'name' => 'Cần Thơ - TP.Hồ Chí Minh',
                    'start_location' => 'Cần Thơ',
                    'end_location' => 'TP Hồ Chí Minh',
                    'time_to_go' => '2024-07-28 06:00:00',
                    'estimated_arrival_time' => '2024-07-28 10:00:00',
                    'estimated_departure_time' => '2024-07-28 06:00:00',
                    'price' => 165.000, 'carriage_way_id' => 1, 'car_id' => 1
                ],
                [
                    'name' => 'Cần Thơ - Vĩnh Long',
                    'start_location' => 'Cần Thơ',
                    'end_location' => 'Vĩnh Long',
                    'time_to_go' => '2024-08-07 06:00:00',
                    'estimated_arrival_time' => '2024-08-07 09:00:00',
                    'estimated_departure_time' => '2024-08-07 06:00:00',
                    'price' => 165.000, 'carriage_way_id' => 2, 'car_id' => 2
                ],
                [
                    'name' => 'Cần Thơ - Hậu Giang',
                    'start_location' => 'Cần Thơ',
                    'end_location' => 'Hậu Giang',
                    'time_to_go' => '2024-08-07 06:00:00',
                    'estimated_arrival_time' => '2024-08-07 09:00:00',
                    'estimated_departure_time' => '2024-08-07 06:00:00',
                    'price' => 165.000, 'carriage_way_id' => 3, 'car_id' => 3
                ],
                [
                    'name' => 'Cần Thơ - Đồng Tháp',
                    'start_location' => 'Cần Thơ',
                    'end_location' => 'Đồng Tháp',
                    'time_to_go' => '2024-08-07 06:00:00',
                    'estimated_arrival_time' => '2024-08-07 09:00:00',
                    'estimated_departure_time' => '2024-08-07 06:00:00',
                    'price' => 165.000, 'carriage_way_id' => 4, 'car_id' => 4
                ],
                [
                    'name' => 'Cần Thơ - Cà Mau',
                    'start_location' => 'Cần Thơ',
                    'end_location' => 'Cà Mau',
                    'time_to_go' => '2024-08-07 06:00:00',
                    'estimated_arrival_time' => '2024-08-07 09:00:00',
                    'estimated_departure_time' => '2024-08-07 06:00:00',
                    'price' => 165.000, 'carriage_way_id' => 5, 'car_id' => 5
                ],
            ]
        );
    }
}
