<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'phone' => '098765423',
            'address' => '123 Main St, City, State, 12345',
            'role' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => Hash::make('user123'),
            'phone' => '078977899',
            'address' => 'Hưng Phú, Cái Răng, TP Cần Thơ',
            'role' => 0,
        ]);
    }
}
