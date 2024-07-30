<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seat_positions')->insert(['name' => 'A01', 'price' => 165.000, 'status' => 1, 'cars_id' => 1]);
        DB::table('seat_positions')->insert(['name' => 'A02', 'price' => 165.000, 'status' => 1, 'cars_id' => 1]);
        DB::table('seat_positions')->insert(['name' => 'A03', 'price' => 165.000, 'status' => 1, 'cars_id' => 1]);
        DB::table('seat_positions')->insert(['name' => 'A03', 'price' => 165.000, 'status' => 1, 'cars_id' => 1]);
        DB::table('seat_positions')->insert(['name' => 'A04', 'price' => 165.000, 'status' => 1, 'cars_id' => 1]);

        DB::table('seat_positions')->insert(['name' => 'B01', 'price' => 165.000, 'status' => 1, 'cars_id' => 1]);
        DB::table('seat_positions')->insert(['name' => 'B02', 'price' => 165.000, 'status' => 1, 'cars_id' => 1]);
        DB::table('seat_positions')->insert(['name' => 'B03', 'price' => 165.000, 'status' => 1, 'cars_id' => 1]);
        DB::table('seat_positions')->insert(['name' => 'B03', 'price' => 165.000, 'status' => 1, 'cars_id' => 1]);
        DB::table('seat_positions')->insert(['name' => 'B04', 'price' => 165.000, 'status' => 1, 'cars_id' => 1]);

        DB::table('seat_positions')->insert(['name' => 'A01', 'price' => 165.000, 'status' => 1, 'cars_id' => 2]);
        DB::table('seat_positions')->insert(['name' => 'A02', 'price' => 165.000, 'status' => 1, 'cars_id' => 2]);
        DB::table('seat_positions')->insert(['name' => 'A03', 'price' => 165.000, 'status' => 1, 'cars_id' => 2]);
        DB::table('seat_positions')->insert(['name' => 'A03', 'price' => 165.000, 'status' => 1, 'cars_id' => 2]);
        DB::table('seat_positions')->insert(['name' => 'A04', 'price' => 165.000, 'status' => 1, 'cars_id' => 2]);

        DB::table('seat_positions')->insert(['name' => 'B01', 'price' => 165.000, 'status' => 1, 'cars_id' => 2]);
        DB::table('seat_positions')->insert(['name' => 'B02', 'price' => 165.000, 'status' => 1, 'cars_id' => 2]);
        DB::table('seat_positions')->insert(['name' => 'B03', 'price' => 165.000, 'status' => 1, 'cars_id' => 2]);
        DB::table('seat_positions')->insert(['name' => 'B03', 'price' => 165.000, 'status' => 1, 'cars_id' => 2]);
        DB::table('seat_positions')->insert(['name' => 'B04', 'price' => 165.000, 'status' => 1, 'cars_id' => 2]);

        DB::table('seat_positions')->insert(['name' => 'A01', 'price' => 165.000, 'status' => 1, 'cars_id' => 3]);
        DB::table('seat_positions')->insert(['name' => 'A02', 'price' => 165.000, 'status' => 1, 'cars_id' => 3]);
        DB::table('seat_positions')->insert(['name' => 'A03', 'price' => 165.000, 'status' => 1, 'cars_id' => 3]);
        DB::table('seat_positions')->insert(['name' => 'A03', 'price' => 165.000, 'status' => 1, 'cars_id' => 3]);
        DB::table('seat_positions')->insert(['name' => 'A04', 'price' => 165.000, 'status' => 1, 'cars_id' => 3]);

        DB::table('seat_positions')->insert(['name' => 'B01', 'price' => 165.000, 'status' => 1, 'cars_id' => 3]);
        DB::table('seat_positions')->insert(['name' => 'B02', 'price' => 165.000, 'status' => 1, 'cars_id' => 3]);
        DB::table('seat_positions')->insert(['name' => 'B03', 'price' => 165.000, 'status' => 1, 'cars_id' => 3]);
        DB::table('seat_positions')->insert(['name' => 'B03', 'price' => 165.000, 'status' => 1, 'cars_id' => 3]);
        DB::table('seat_positions')->insert(['name' => 'B04', 'price' => 165.000, 'status' => 1, 'cars_id' => 3]);

    }
}
