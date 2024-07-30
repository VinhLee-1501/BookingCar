<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            'name' => 'Hyundai New County SL',
            'license_plates' => '64H - 098.76',
            'category_id' => 2,
        ]);
        DB::table('cars')->insert([
            'name' => 'Hyundai Universe Advanced',
            'license_plates' => '65H - 967.76',
            'category_id' => 4,
        ]);
        DB::table('cars')->insert([
            'name' => 'Hyundai County',
            'license_plates' => '65H - 945.76',
            'category_id' => 2,
        ]);
    }
}
