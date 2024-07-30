<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Xe khách 24 chỗ',
            'seats' => 24
        ]);
        DB::table('categories')->insert([
            'name' => 'Xe khách 29 chỗ',
            'seats' => 29
        ]);
        DB::table('categories')->insert([
            'name' => 'Xe khách 35 chỗ',
            'seats' => 35
        ]);
        DB::table('categories')->insert([
            'name' => 'Xe khách 45 chỗ',
            'seats' => 45
        ]);
    }
}
