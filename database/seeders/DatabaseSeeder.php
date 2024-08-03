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
            CustomerSeeder::class,
            TicketCarSeeder::class,
            CitySeeder::class,
            DistrictSeeder::class,
            StationSeeder::class,
            CarriageWaySeeder::class,
            CarSeeder::class,
            CategorySeeder::class,
            TheRidesSeeder::class,
            SeatPositionSeeder::class
        ]);
    }
}
