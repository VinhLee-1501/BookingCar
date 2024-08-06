<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CitySeeder::class,
            DistrictSeeder::class,
            StationSeeder::class,
            CarriageWaySeeder::class,
            CategorySeeder::class,
            CarSeeder::class,
            AddressSeeder::class,
            SeatPositionSeeder::class,
            TicketSeatCarSeeder::class,
            TheRidesSeeder::class,
            TicketBookingCarSeeder::class,
            TicketCarSeeder::class,
        ]);
    }
}