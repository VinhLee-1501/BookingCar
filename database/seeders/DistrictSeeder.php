<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('districts')->insert(['name' => 'Bình Minh', 'city_id' => 1]);
        DB::table('districts')->insert(['name' => 'Cái Răng', 'city_id' => 2]);
        DB::table('districts')->insert(['name' => 'Bình Tân', 'city_id' => 3]);
        DB::table('districts')->insert(['name' => 'Gò Công', 'city_id' => 4]);
        DB::table('districts')->insert(['name' => 'Quận 8', 'city_id' => 5]);
        DB::table('districts')->insert(['name' => 'Vị Thủy', 'city_id' => 6]);
        DB::table('districts')->insert(['name' => 'Cao Lãnh', 'city_id' => 7]);
        DB::table('districts')->insert(['name' => 'Châu Thành', 'city_id' => 8]);
    }
}
