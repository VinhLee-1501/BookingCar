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
            'name' => 'Giường nằm',
            'seats' => 45
        ]);
        DB::table('categories')->insert([
            'name' => 'Ghế ngồi',
            'seats' => 45
        ]);
    }
}
