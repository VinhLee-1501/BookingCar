<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ticket_cars')->insert([
            'name' => 'V01',
            'seat_ld' => 2,
            'ticket_booking_id' => 1,
            'the_ride_id' => 5
        ]);
        DB::table('ticket_cars')->insert([
            'name' => 'V02',
            'seat_ld' => 2,
            'ticket_booking_id' => 2,
            'the_ride_id' => 6
        ]);
        DB::table('ticket_cars')->insert([
            'name' => 'V03',
            'seat_ld' => 3,
            'ticket_booking_id' => 8,
            'the_ride_id' => 6
        ]);
    }
}
