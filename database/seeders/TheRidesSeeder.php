<?php

namespace Database\Seeders;

use App\Models\TheRides;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TheRidesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('the_rides')->insert([
            'name' => "Sài Gòn - Cần Thơ",
            'time_to_go' => Carbon::parse('2024-07-31 12:00:00'),
            'estimated_arrival_time' => Carbon::parse('2024-07-31 18:00:00'),
            'estimated_departure_time' => Carbon::parse('2024-07-31 10:00:00'),
            'price' => '10000',
            'carriage_way_id' => '1',
            'car_id'=>46
        ]);
        DB::table('the_rides')->insert([
            'name' => "Sài Gòn - Hà Nội",
            'time_to_go' => Carbon::parse('2024-07-21 12:00:00'),
            'estimated_arrival_time' => Carbon::parse('2024-07-21 18:00:00'),
            'estimated_departure_time' => Carbon::parse('2024-07-21 10:00:00'),
            'price' => '10000',
            'carriage_way_id' => 2,
            'car_id'=>43
        ]);
    }
}
