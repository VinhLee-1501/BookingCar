<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketBookingCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ticket_booking_cars')->insert([
            'day_founded' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1,
            'prepayment' => 165.000,
            'user_id' => 1
        ]);

        DB::table('ticket_booking_cars')->insert([
            'day_founded' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1,
            'prepayment' => 165.000,
            'user_id' => 2
        ]);
        DB::table('ticket_booking_cars')->insert([
            'day_founded' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => 1,
            'prepayment' => 165.000,
            'user_id' => 2
        ]);
    }
}
