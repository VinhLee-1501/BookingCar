<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stations')->insert(['name' => 'Bến xe Vĩnh Long', 'city_id' => 1]);
        DB::table('stations')->insert(['name' => 'Bến xe TTTP Cần Thơ', 'city_id' => 2]);
        DB::table('stations')->insert(['name' => 'Bến xe Miền Tây', 'city_id' => 3]);
        DB::table('stations')->insert(['name' => 'Bến Xe Gò Công Trần Công Tưởng', 'city_id' => 4]);
        DB::table('stations')->insert(['name' => 'Bến Xe Quận 8 - 328-330 - Quốc Lộ 50', 'city_id' => 5]);
        DB::table('stations')->insert(['name' => 'Bến Xe Vị Thanh', 'city_id' => 6]);
        DB::table('stations')->insert(['name' => 'Bến Xe Cao Lãnh', 'city_id' => 7]);
        DB::table('stations')->insert(['name' => 'Bến Xe Bến Tre', 'city_id' => 8]);
    }
}
