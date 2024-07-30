<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Customer::create([
            'name' => 'Admin',
            'email' => 'admddin@gmail.com',
            'password' => Hash::make('admin123'),
        ]);

    }
}