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
            Ticket::class,
            CarSeeder::class,
            CategorySeeder::class,
            TheRidesSeeder::class,
            SeatPositionSeeder::class
        ]);
    }
}
