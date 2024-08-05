<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seat_positions')->insert([
            'name' => 'A09',
            'price' => 250000,
            'status' => 1,
            'cars_id' => 2,
        ]);
        DB::table('seat_positions')->insert([
            'name' => 'B18',
            'price' => 250000,
            'status' => 0,
            'cars_id' => 4,
        ]);
        DB::table('seat_positions')->insert([
            'name' => 'A15',
            'price' => 250000,
            'status' => 0,
            'cars_id' => 2,
        ]);
    }
}
