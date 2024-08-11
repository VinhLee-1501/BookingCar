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
            'name' => 'Xe 1',
            'license_plates' => '64H - 098.76',
            'category_id' => 2,
        ]);
        DB::table('cars')->insert([
            'name' => 'Xe 2',
            'license_plates' => '65H - 967.76',
            'category_id' => 1,
        ]);
        DB::table('cars')->insert([
            'name' => 'Xe 3',
            'license_plates' => '65H - 945.76',
            'category_id' => 1,

        ]);
        DB::table('cars')->insert([
            'name' => 'Xe 4',
            'license_plates' => '65H - 945.26',
            'category_id' => 2,
        ]);
        DB::table('cars')->insert([
            'name' => 'Xe 5',
            'license_plates' => '65H - 945.26',
            'category_id' => 2,

        ]);
         DB::table('cars')->insert([
        'name' => 'Xe 6',
        'license_plates' => '65H - 945.26',
        'category_id' => 1,
    ]);
    }
}